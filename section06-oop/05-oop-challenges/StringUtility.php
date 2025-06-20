<?php

class StringUtility
{

  public static function shout(string $string)
  {
    return strtoupper($string) . '!';
  }

  public static function whisper(string $string)
  {
    return strtolower($string) . '.';
  }

  public static function repeat(string $string, int $times = 2)
  {
    return str_repeat($string, $times) . '!';
  }
}

echo StringUtility::shout('ShOuT') . '<br>';
echo StringUtility::whisper('WhiShPeR') . '<br>';
echo StringUtility::repeat('repeat', 10) . '<br>';
