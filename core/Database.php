<?php

class DB {

  protected static $base;

  public static function setup($host, $user, $password, $database) {
    self::$base = mysqli_connect($host, $user, $password, $database);
    mysqli_set_charset(self::$base,"utf8mb4");
  }

  public static function query($query) {
    $result = self::$base->query($query);
    if($result === FALSE && DATABASE_ERROR === "true" ) {
      die("DATABASE ERROR #".self::$base->errno . " : " . self::$base->error);
    }

    if( $result === TRUE ) {
      return $result;
    }

    $data = [];
    while($res = $result->fetch_object("stdClass")) {
      array_push($data, $res);
    }
    return $data;
  }

  public static function getLastId(){
    return mysqli_insert_id(self::$base);
  }
}
