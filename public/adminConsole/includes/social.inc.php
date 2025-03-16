<?php 
require_once("../../../autoload/autoload.php");

$response = array(
	"status" => 0,
	"message" => "Form Submission Failed"
);

if (isset($_POST['editAbout'])) {
	$text = htmlspecialchars(stripslashes($_POST['text']));
	if (empty($text)) {
			$response['message'] = "Field cannot be empty";
	}
	else{
		$id = filter_input(INPUT_POST, "social_id", FILTER_SANITIZE_NUMBER_INT);
		$data = [
			"linkedln" => $linkedln,
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
		}
	}
}