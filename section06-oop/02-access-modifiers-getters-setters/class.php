<?php

// basic PHP class syntax
class User
{
  // define properties
  public $name;
  public $email;

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

// Instantiate a new class object
$user1 = new User('John Doe', 'john@test.com');

// update class properties
$user1->name = 'John Doe';
$user1->email = 'john@test.com';

// invoke class methods
$user1->login();

// var_dump($user1);
