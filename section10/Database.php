<?php

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
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];

    try {
      // starts connection with database using PDO
      $this->connection = new PDO($dsn, $config['username'], $config['password']);
    } catch (PDOException $e) {
      throw new Exception("Database connection failed: {$e->getMessage()}");
    }
  }
}
