<?php
require_once("../../../config/database.php");
class Login extends Database{
  public $tableName;
  private $db_con;

  public function __construct(){
    $this->tableName;
    $this->db_con = self::connect();
  }

  public function login($email, $password){
    $sql = "SELECT * FROM ".$this->tableName." WHERE `email` = ?";
    $stmt = $this->db_con->prepare($sql);
    $stmt->execute([$email]);

    if ($stmt->rowCount() > 0) {
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      $db_password = $row['password'];

      if ($password == $db_password){
      // if (password_verify($password, $db_password)) {
        return $row;
      }
      else{
        return 10;
      }
    }
    else{
      return 0;
    }
  }

}
