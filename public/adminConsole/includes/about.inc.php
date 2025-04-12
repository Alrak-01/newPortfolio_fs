<?php 
require_once("../../../autoload/autoload.php");

$response = array(
	"status" => 0,
	"message" => "Form Submission Failed",
	"data" => []
);

if (isset($_POST['editAbout'])) {
	$text = htmlspecialchars(stripslashes($_POST['text']));
	if (empty($text)) {
			$response['message'] = "Field cannot be empty";
	}
	else{
		if (!isset($_POST['about_id'])) {
			$response['message'] = "Id not found";
		}
		
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
				$response['status'] = 1;
		}
	}
}

if (isset($_POST['input'])) {
	$input = htmlspecialchars(stripslashes($_POST['input']));

	 if (empty($input)) {
	 	$result = $about->selectAdmin();
	 	if ($result == 0) {
	 		$response['data'] = "No Data Found";
	 	}
	 	else {
	 		while ($rows = $result->fetch(PDO::FETCH_ASSOC)) {
	 			$response['data'] =  $rows['about_me'];
	 		}
	 	}
	 }
}


echo json_encode($response);