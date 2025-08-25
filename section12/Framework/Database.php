<?php

// namespaces in PHP are a way to categorize common code together
/// namespeaces can be used in autoloaders and in other codes when importing dependencies

namespace Framework;

/// when using namespaces and using libraries outside of the namespace, libraries imports must also be explicitely declared
use PDO;

class Database
{
  public $connection;

  /**
   * Constructor for Database class
   * 
   * @param array contains database configurations
   */

  public function __construct($config)
  {
    // sets up database connection string
    $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']}";

    // sets PDO option
    $options = [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

    try {
      // starts connection with database using PDO
      $this->connection = new PDO($dsn, $config['username'], $config['password'], $options);
    } catch (PDOException $e) {
      throw new Exception("Database connection failed: {$e->getMessage()}");
    }
  }

  /**
   * Query the database
   * 
   * @param string $query
   * @return PDOStatement
   * @throws PDOException
   */

  public function query($query, $params = [])
  {
    try {
      $sth = $this->connection->prepare($query);

      foreach ($params as $param => $value) {
        $sth->bindValue(':' . $param, $value);
      }

      $sth->execute();
      return $sth;
    } catch (PDOException $e) {
      throw new Exception("Query failed to execute: {$e->getMessage()}");
    }
  }
}
