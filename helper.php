<?php

session_start();

class Helper {
  private static $flash = null;
  
  public static function format_date($date) {
    if ($date === null) {
      return null;
    }

    if (is_string($date)) {
      $date = date_create($date);
    }

    return date_format($date, "d F Y");
  }

  public static function jenis_kelamin($jenis_kelamin) {
    switch ($jenis_kelamin) {
      case 'l':
        return 'Laki-laki';
      case 'p':
        return 'Perempuan';
      default:
        return null;
    }
  }

  public static function set_flash($type, $message) {
    $_SESSION['flash'] = [
      'type' => $type,
      'message' => $message
    ];
  }

  public static function flash() {
    if (self::$flash === null) {
      self::$flash = (object)$_SESSION['flash'];
      unset($_SESSION['flash']);
    }
    
    return self::$flash;
  }

  public static function has_flash() {
    foreach (self::flash() as $_) return true;

    return false;
  }
}