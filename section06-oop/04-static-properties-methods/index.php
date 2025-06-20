<?php

class MathUtility
{
  public static $pi = 3.14;

  public static function add(...$nums)
  {
    return array_sum($nums);
  }
}

// traditional way to instantiate a class and call class property
// $mathUtil1 = new MathUtility();
// echo $mathUtil1->pi;

// call a static class method
echo MathUtility::$pi . '<br>';
echo MathUtility::add(1, 2, 3, 4);
