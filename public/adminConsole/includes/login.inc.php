<?php
require_once("../../../autoload/autoload.php");

$response = array(
    'status' => 0,
    'message' => 'Form submission failed'
);

if (isset($_POST['loginSubmit'])) {
    $email = htmlspecialchars(stripslashes($_POST['email']));
    $password = htmlspecialchars(stripslashes($_POST['password']));

    if (empty($email)) {
        $response['message'] = 'Type in your email.';
    }
    elseif(empty($password)){
    	$response['message'] = 'Type in your password';
    }
    else {
      $result = $login->login($email, $password);
      if ($result == 0) {
          $response['message'] = "Invalid Email Address";
      }
      elseif ($result == 10) {
        $response['message'] = "Invalid credentials";
      }
        else {
          session_start();
          $response['status'] = 1;
          $_SESSION['lastname'] = $result['lastname'];
          $_SESSION['firstname'] = $result['firstname'];
          $_SESSION['id'] = $result['id'];
          header("location:../index.php");
        }
      }
}

echo json_encode($response);