<?php

namespace Application\models;

use Application\core\Database;
use PDO;
class Tarefas
{
  public static function findAll()
  {
    $conn = new Database();
    $result = $conn->executeQuery('SELECT * FROM tarefas');
    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

  public static function findById(int $id)
  {
    $conn = new Database();
    $result = $conn->executeQuery('SELECT * FROM tarefas WHERE id = :ID LIMIT 1', array(
      ':ID' => $id
    ));

    return $result->fetchAll(PDO::FETCH_ASSOC);
  }

}
