<?php

// abstract classes, which cannot be instantiated, can be parent of other classes
abstract class Shape
{
  protected string $name;

  // abstract marks the method as only accessible by children
  /// class must be abstract to get access to abstract methods
  abstract public function calculateArea();

  public function __construct($name)
  {
    $this->name = $name;
  }

  // concrete method
  public function getName()
  {
    return $this->name;
  }
}

class Circle extends Shape
{

  private $radius;

  public function __construct(string $name, int $radius)
  {
    parent::__construct($name);
    $this->radius = $radius;
  }

  // child class must implement parent abstract methods
  /// another example of polymorphism
  public function calculateArea()
  {
    return pi() * pow($this->radius, 2);
  }
}

// another example of a child class using abstract parent class
class Rectangle extends Shape
{
  private $width;
  private $height;

  public function __construct(string $name, int $height, int $width)
  {
    parent::__construct($name);
    $this->height = $height;
    $this->width = $width;
  }

  public function calculateArea()
  {
    return $this->width * $this->height;
  }
}

// instantiate child class which extends abstract class
$circle = new Circle('Circle', 5);
$rectangle = new Rectangle('Rectangle', 4, 6);

echo $circle->getName() . ' Area: ' . $circle->calculateArea() . '<br>';
echo $rectangle->getName() . ' Area: ' . $rectangle->calculateArea() . '<br>';
