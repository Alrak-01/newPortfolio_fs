<?php 
require_once("../../../autoload/autoload.php");

$response = array(
	"status" => 0,
	"message" => "Form Submission Failed"
);

if (isset($_POST['editSocial'])) {
	$linkedin = htmlspecialchars(stripslashes($_POST['linkedin']));
	$github = htmlspecialchars(stripslashes($_POST['github']));
	$whatsapp = htmlspecialchars(stripslashes($_POST['whatsapp']));
	$skype = htmlspecialchars(stripslashes($_POST['skype']));
	$mobile = htmlspecialchars(stripslashes($_POST['mobile']));

	if (empty($linkedin) || empty($github) || empty($whatsapp) || empty($skype) || empty($mobile)) {
			$response['message'] = "Field cannot be empty";
	}
	else{
		if (!isset($_POST['social_id'])) {
			$response['message'] = "Id not found";
		}
		
		$id = filter_input(INPUT_POST, "social_id", FILTER_SANITIZE_NUMBER_INT);
		// $id = $_GET['id'];
		$data = [
			"linkedln" => $linkedin,
			"github" => $github,
			"whatsapp" => $whatsapp,
			"skype" => $skype,
			"mobile" => $mobile
		];
		$result = $social->updateAdmin($id, $data);
		if ($result == 0){
				$response['message'] = "Database error occurred";
		}
		elseif ($result == 1) {
				$response['message'] = "Socials updated successfully!";
				$response['status'] = 1;
		}
	}
}

echo json_encode($response);