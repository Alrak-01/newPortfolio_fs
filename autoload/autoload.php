<?php
  include("../../../config/database.php");

// AUTOLOADER FUNCTION
spl_autoload_register('myAutoloader');

function myAutoloader($className){
  $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

  if (strpos($url, 'includes') !== false) {

      $path = "../../../modals/";
  }
  else {
    $path = "../../modals/";
  }
  $extention = ".class.php";
  $fullPath = $path . $className . $extention;
  if (!file_exists($fullPath)) {
    return false;
  }
  else {
    include_once $fullPath;
  }
}

$skill = new Skill();
$skill->tableName = "tbl_skill";

$social = new Admin();
$social->tableName = "tbl_admin";

$about = new Admin();
$about->tableName = "tbl_admin";

$project = new Project();
$project->tableName = "tbl_project";