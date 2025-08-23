<?php

namespace App\Controllers;

use Framework\Database;
use Framework\Validation;

class ListingController
{

  protected $db;

  public function __construct()
  {
    $config = require basePath('config/db.php');

    $this->db = new Database($config);
  }

  /**
   * Show all listing
   *
   * @return void
   */
  public function index()
  {

    $listings = $this->db->query('
      SELECT * FROM workopia.listings;
    ')->fetchAll();

    loadView('listings/index', ['listings' => $listings]);
  }

  /**
   * Create a listing
   *
   * @return void
   */
  public function create()
  {
    loadView('listings/create');
  }

  /**
   * Show a single listing
   *
   * @param array $params
   * @return void
   */
  public function show($params)
  {

    // grab url id by using superglobal
    $id = $params['id'] ?? '';

    // prepare query arguments to prevent injections
    $params = [
      'id' => $id
    ];

    $listing = $this->db->query('SELECT * FROM workopia.listings WHERE id = :id', $params)->fetch();

    loadView('listings/show', ['listing' => $listing]);
  }

  /**
   * Store data in database
   * 
   * @return void
   */
  public function store()
  {

    $allowedFields = ['title', 'description', 'salary', 'tags', 'company', 'address', 'city', 'state', 'phone', 'email', 'requirements', 'benefits'];

    $newListingData = array_intersect_key($_POST, array_flip($allowedFields));

    $newListingData['user_id'] = 1;

    // can pass in the function name and arguments to array map, running the function on for each array item
    $newListingData = array_map('sanitize', $newListingData);

    $requiredFields = ['title', 'description', 'salary', 'email', 'city', 'state'];

    $errors = [];

    foreach ($requiredFields as $field) {
      if (empty($newListingData[$field]) || !Validation::string($newListingData[$field])) {
        $errors[$field] = ucfirst($field) . ' is required';
      }
    }

    if (!empty($errors)) {
      loadView('listings/create', [
        'errors' => $errors,
        'listing' => $newListingData
      ]);
    } else {
      // submit data
      $fields = [];

      foreach ($newListingData as $field => $value) {
        $fields[] = $field;
      }

      $fields = implode(', ', $fields);

      $values = [];

      foreach ($newListingData as $field => $value) {
        // convert empty strings to null
        if ($value === '') {
          $newListingData[$field] = null;
        }
        $values[] = ':' . $field;
      }

      $values = implode(', ', $values);

      $query = "INSERT INTO listings ({$fields}) VALUES ({$values})";

      $this->db->query($query, $newListingData);

      // redirect using PHP
      redirect('/listings');
    }
  }

  /**
   * Delete a listing
   * 
   * @param array $params
   * @return void
   */
  public function destroy($params)
  {
    $id = $params['id'];

    $params = [
      'id' => $id
    ];

    $listing = $this->db->query('SELECT * FROM listings WHERE id = :id', $params)->fetch();

    if (!$listing) {
      ErrorController::notFound('Listing not found');
      return;
    }

    $this->db->query('DELETE FROM listings WHERE id = :id', $params);

    // set flash message
    $_SESSION['success_message'] = 'Listing deleted succesfully';

    redirect('/listings');
  }
}
