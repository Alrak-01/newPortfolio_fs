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

    if (isset($_POST['forgetPassword'])) {
    $email = htmlspecialchars(stripslashes($_POST['email']));

      if (empty($email)) {
        $response['message'] = "Input field cannot be empty";
      }
      else {
        $token = bin2hex(random_bytes(50));

        $resetTable = "tbl_reset_password";
        $result = $login->forgetPassword($email, $token);
        if ($result == 0) {
            $response['message'] = "Email address cannot be found";
        }
        elseif ($result == 10) {
            $response['message'] = "Database error occurred";
        }
        else {
          $lastname = ucFirst($result['lastname']);
          $firstname = ucFirst($result['firstname']);

          $resetLink = "../authentication/reset_password.php?token=".$token;
          $text = "<pre>Dear $lastname $firstname,

                          We have received a request to reset your password. To proceed with the password reset, please click on the link below:

                          <a href='" . htmlspecialchars($resetLink) . "'>" . htmlspecialchars($resetLink) . "</a>

                          If you did not request a password reset, you can safely ignore this email. Your account remains secure.

                          Please note that this link is valid for a limited time. If you do not use it within 10 minutes, you will need to request another password reset.

                          Thank you,
                          [wizardious]</pre>";
          $to = $email;
          $subject = "Reset Lost Password";
          $message = $text;
          $headers = "From:wizardious@gmail.com\r\n";
          $headers .= "Reply-To: admin@gmail.com\r\n";

          echo $to;
          echo $subject;
          echo $message;
          echo $headers;
        }
  }
  }

  if (isset($_POST['resetPassword'])) {
    $password = htmlspecialchars(stripslashes($_POST['password']));
    $cpassword = htmlspecialchars(stripslashes($_POST['cpassword']));
    // $token = trim(strip_tags($_POST['token']));
    $token = $_GET['token'];

    if (empty($password) || empty($cpassword)) {
      $response['message'] = "Input field cannot be empty";
    }
    elseif (strlen($password) < 8) {
        $response['message'] = "Password cannot be less than 8";
    }
    elseif ($password != $cpassword) {
        $response['message'] = "Passwords does not match";
    }
    elseif (!preg_match('/^[a-zA-Z0-9]+$/', $token)) {
        $response['message'] = "Invalid access to page";
        $response['status'] = 10;
    }
    else {
      $resetTable = "tbl_reset_password";
      $hashPassword = password_hash($password, PASSWORD_DEFAULT);
      $result = $login->resetPassword($token, $hashPassword, $resetTable);
      if ($result == 0 || $result == 10) {
        $response['status'] = 10;
        $response['message'] = "Error occured, start process all over";
      }
      elseif ($result == 1) {
        $response['status'] = 1;
        // $response['message'] = "Password reset successfully";
        header("location:../authentication/login.php?success");
      }
    }
  }

echo json_encode($response);