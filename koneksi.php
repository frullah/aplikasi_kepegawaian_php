<?php

class Database {
  private $db;
  
  function __construct () {
    $this->db = new PDO(
      "mysql:host=localhost;dbname=UAS1",
      "root",
      ""
    );
  }

  public function find_all($sql, $params = null) {
    $statement = $this->db->prepare($sql);
    $statement->execute($params);
    return $statement->fetchAll();
  }

  public function insert($sql, $params = null) {
    $statement = $this->db->prepare($sql);
    $statement->execute($params);
    return $this->db->lastInsertId();
  }
}

