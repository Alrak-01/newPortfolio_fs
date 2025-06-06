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

      if (password_verify($password, $db_password)) {
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

    public function forgetPassword($email, $token){
    $sql = "SELECT * FROM ".$this->tableName." WHERE `email` = ?";
    $stmt = $this->db_con->prepare($sql);
    $stmt->execute([$email]);
    if ($stmt->rowCount() > 0) {
      $sql = "INSERT INTO `tbl_password_reset` (`email`,`token`) VALUES (?, ?)";
      $newStmt = $this->db_con->prepare($sql);
      $newStmt->execute([$email, $token]);
      if ($newStmt) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
        // FORGET PASSWORD CREATED SUCCESSFULLY...
      }
      return 10;
      // CREATION FAILLED...
    }
    else {
      return 0;
      // EMAIL NOT FOUND...
    }

  }

  

  public function resetPassword($token, $password){
    $sql = "SELECT * FROM `tbl_password_reset` WHERE `token` = ?";
    $stmt = $this->db_con->prepare($sql);
    $stmt->execute([$token]);
    if ($stmt->rowCount() > 0) {
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      $email = $row['email'];
      $hasedPassword = password_hash($password, PASSWORD_DEFAULT);
      $sql = "UPDATE ".$this->tableName." SET `password` = ? WHERE `email` = ?";
      $newStmt = $this->db_con->prepare($sql);
      $newStmt->execute([$password, $email]);
      if ($newStmt) {
        $sql = "DELETE FROM `tbl_password_reset` WHERE `email` = ?";
        $delStmt = $this->db_con->prepare($sql);
        $delStmt->execute([$email]);
        return $delStmt ? 1 : 100;
        // 1 = DELETED SUCCESSFULLY AND PASSWORD RESET COMPLETED
        // 0 = DELETE FAILED...

      }
      return 10;
      // UPDATE OF PASSWORD FAILED
    }
    return 0;
    // TOKEN DOES NOT MATCH...
  }

}
