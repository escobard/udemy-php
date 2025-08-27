<?php

namespace Framework;

class Session
{

  /**
   * Start the session
   * 
   * @return void
   */
  public static function start()
  {
    if (session_status() == PHP_SESSION_NONE) {
      // starts a session in PHP
      /**  session status returns:
       * 0 if session is disabled
       * 1 if session is enabled but not session for user exists
       * 2 if session is enabled and session for user exists
       */
      session_start();
    }
  }

  /**
   * Set a session key/value pair
   * 
   * @param string $key
   * @param mixed $value
   * 
   * @return void
   */
  public static function set($key, $value)
  {
    $_SESSION[$key] = $value;
  }

  /**
   * Get a session key/value pair
   * 
   * @param string $key
   * @param mixed $default
   * 
   * @return mixed
   */
  public static function get($key, $default = null)
  {
    return isset($_SESSION[$key]) ? $_SESSION[$key] : $default;
  }

  /**
   * Check if session key exists
   * 
   * @param string $key
   * 
   * @return boolean
   */
  public static function has($key)
  {
    return isset($_SESSION[$key]);
  }

  /**
   * Clear session by key
   * 
   * @param string $key
   * 
   * @return void
   */
  public static function clear($key)
  {
    if (isset($_SESSION[$key])) {
      unset($_SESSION[$key]);
    }
  }
  /**
   * Clear all session data
   * 
   * @return void
   */
  public static function clearAll()
  {
    session_unset();
    session_destroy();
  }

  /**
   * Set a flash message
   * 
   * @param string $key
   * @param string $message
   * 
   * @return void
   */
  public static function setFlashMessage($key, $message)
  {
    // invoke class static methods
    self::set('flash_' . $key, $message);
  }

  /**
   * Get a flash message and unset
   * 
   * @param string $key
   * @param mixed $default
   * 
   * @return string
   */
  public static function getFlashMessage($key, $default = null)
  {
    $message = self::get('flash_' . $key, $default);
    self::clear('flash_' . $key);
    return $message;
  }
}
