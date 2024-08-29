<?php
declare(strict_types=1);
require_once 'db/connection.php';

class User {
  protected int $id;
  protected string $username;
  protected string $password;
  protected string $access_level;

  public function __construct($row){
    $this->id = $row['id_usuario'];
    $this->username = $row['usuario'];
    $this->password = $row['clave'];
    $this->access_level = $row['id_pto_acceso'];
  }

  public static function getAllUsers(): array
  {
    $db = ConnectionDB::connection();
    $data = $db->query("SELECT * FROM admin_usuarios");
    $users = [];

    while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
      $user = new User($row);
      $users[] = $user;
    }

    return $users;
  }

  public function getId(): int
  {
    return $this->id;
  }

  public function getUsername(): string
  {
    return $this->username;
  }

  public function getPassword(): string
  {
    return $this->password;
  }

  public function getAccessLevel(): string
  {
    return $this->access_level;
  }

}
