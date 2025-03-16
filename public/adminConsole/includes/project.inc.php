<?php 
require_once("../../../autoload/autoload.php");

$response = array(
	"message" => "Form Submission Failed",
	"status" => 0
);

if (isset($_POST['addProject'])) {
		$stack = htmlspecialchars(stripslashes($_POST['stack']));
		$title = htmlspecialchars(stripslashes($_POST['title']));
		$live_link = htmlspecialchars(stripslashes($_POST['live_link']));
		$github_link = htmlspecialchars(stripslashes($_POST['github_link']));
		$date = htmlspecialchars(stripslashes($_POST['date']));
		
		if (empty($stack) || empty($title) || empty($live_link) || empty($github_link) || empty($date)) {
					$response['message'] = "Input field cannot be empty";
			}
			else{
				$result = $project->createProject($stack, $title, $live_link, $github_link, $date);
				if ($result == 0) {
						$response['message'] = "Database error occurred";
				}
				elseif ($result == 1){
						$response['message'] = "Project created successfully!";
						$response['status'] = 1;
				}
			}

}

if (isset($_POST['editProject'])) {
		if (!isset($_POST['project_id'])) {
			$response['message'] = "project id not found";
		}
		else{
			$stack = htmlspecialchars(stripslashes($_POST['stack']));
			$title = htmlspecialchars(stripslashes($_POST['title']));
			$live_link = htmlspecialchars(stripslashes($_POST['live_link']));
			$github_link = htmlspecialchars(stripslashes($_POST['github_link']));
			$date = htmlspecialchars(stripslashes($_POST['date']));

			if (empty($stack) || empty($title) || empty($live_link) || empty($github_link) || empty($date)) {
						$response['message'] = "Input field cannot be empty";
				}
				else{
					$result = $project->updateProject($id, $stack, $title, $live_link, $github_link, $date);
					if ($result == 0) {
							$response['message'] = "Database error occurred";
					}
					elseif ($result == 1){
							$response['message'] = "Project Updated successfully!";
							$response['status'] = 1;
					}
				}
		}
}

if (isset($_POST['delete_project']) && isset($_POST['project_id'])) {
	$id = filter_input(INPUT_POST, "project_id", FILTER_SANITIZER_NUMBER_INT);
	$result = $project->deleteProject($id);
	if ($result == 0) {
		$response['message'] = "Database error occurred";
	}
	elseif ($result == 1){
		$response['message'] = "project deleted successfully!";
	}
}
else{
	$response['message'] = "POST error or ID not found...";
}


echo json_encode($response);