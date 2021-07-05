<?php

class Helper {
  public static function format_date($date) {
    if ($date === null) {
      return null;
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
}