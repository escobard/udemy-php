<?php

// basic PHP class syntax
class User
{
  // define properties
  public $name;
  public $email;
  protected $status = 'active';

  // define constructor and required class arguments
  public function __construct(string $name, string $email)
  {
    // call internal properties/methods with $this keyword
    $this->name = $name;
    $this->email = $email;
  }

  // define method
  public function login()
  {
    echo $this->name . ' logged in';
  }
}

class Admin extends User
{
  public $level;
  public function __construct(string $name, string $email, int $level)
  {
    $this->level = $level;
    // pass values to parent class constructor
    parent::__construct($name, $email);
  }
  // call properties inherited from the parent
  public function getStatus()
  {
    echo $this->status;
  }

  // overwrite parent methods (example of polymorphism)
  public function login()
  {
    echo 'Admin' . $this->name . ' logged in';
  }
}

// Instantiate a new class object
$user1 = new User('John Doe', 'john@test.com');

// update class properties
$user1->name = 'John Doe';
$user1->email = 'john@test.com';

// invoke class methods
$user1->login();

// var_dump($user1);

$admin = new Admin('Tom', 'tom@test.com', 9);

var_dump($admin);
$admin->getStatus();
