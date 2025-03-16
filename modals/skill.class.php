<?php
// include("../../../config/database.php");

class Skill extends Database{
  public $tableName;
  public $db_con;

  public function __construct(){
    $this->tableName;
    $this->db_con = self::connect();
  }

  public function createSkill($name, $experience, $type){
    $sql = "INSERT INTO ".$this->tableName." (`name`, `experience`, `type`) VALUES (?, ?, ?)";
    $stmt = $this->db_con->prepare($sql);
    $stmt->execute([$name, $experience, $type]);
    return $stmt ? 1 : 0;
  }

  public function selectSkill(){
    $sql = "SELECT * FROM ".$this->tableName;
    $stmt = $this->db_con->prepare($sql);
    $stmt->execute();
    return $stmt->rowCount() > 0 ? $stmt : 0;
  }

  public function selectSingleSkill($id){
    $sql = "SELECT * FROM ".$this->tableName." WHERE `id` = ?";
    $stmt = $this->db_con->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->rowCount() > 0 ? $stmt : 0;
  }

  public function updateSkill($id, $name, $experience, $type){
    $sql = "UPDATE ".$this->tableName." SET `name` = ?, `experience` = ?, `type` = ? WHERE `id` = ?";
    $stmt = $this->db_con->prepare($sql);
    $stmt->execute([$name, $experience, $type, $id]);
    return $stmt ? 1 : 0;
  }

  public function deleteSkill($id){
    $sql = "DELETE FROM ".$this->tableName." WHERE `id` = ?";
    $stmt = $this->db_con->prepare($sql);
    $stmt->execute([$id]);
    return $stmt ? 1 : 0;
  }
}
