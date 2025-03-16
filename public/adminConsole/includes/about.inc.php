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
		$id = filter_input(INPUT_POST, "about_id", FILTER_SANITIZE_NUMBER_INT);
		$data = [
			"about_me" => $text
		];
		$result = $about->updateAdmin($id, $data);
		if ($result == 0){
				$response['message'] = "Database error occurred";
		}
		elseif ($result == 1) {
				$response['message'] = "About Alrak updated successfully!";
		}
	}
}