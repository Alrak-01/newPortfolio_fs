<?php 
require_once("../../../autoload/autoload.php");

$response = array(
	"message" => "Form Submission Failed",
	"status" => 0,
	"data" => ""
);
 
if (isset($_POST['addProject'])) {
		$stack = htmlspecialchars(stripslashes($_POST['stack']));
		$title = htmlspecialchars(stripslashes($_POST['title']));
		$live_link = htmlspecialchars(stripslashes($_POST['liveLink']));
		$github_link = htmlspecialchars(stripslashes($_POST['githubLink']));
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
			$live_link = htmlspecialchars(stripslashes($_POST['liveLink']));
			$github_link = htmlspecialchars(stripslashes($_POST['githubLink']));
			$date = htmlspecialchars(stripslashes($_POST['date']));

			if (empty($stack) || empty($title) || empty($live_link) || empty($github_link) || empty($date)) {
						$response['message'] = "Input field cannot be empty";
				}
				else{
					$id = filter_input(INPUT_POST, "project_id", FILTER_SANITIZE_NUMBER_INT);

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

// if (isset($_POST['delete_project']) && isset($_POST['project_id'])) {
// 	$id = filter_input(INPUT_POST, "project_id", FILTER_SANITIZER_NUMBER_INT);
// 	$result = $project->deleteProject($id);
// 	if ($result == 0) {
// 		$response['message'] = "Database error occurred";
// 	}
// 	elseif ($result == 1){
// 		$response['message'] = "project deleted successfully!";
// 		$response['status'] = 1;
// 	}
// }
// else{
// 	$response['message'] = "POST error or ID not found...";
// }

if (isset($_POST['input'])) {
	$input = htmlspecialchars(stripslashes($_POST['input']));

	 if (empty($input)) {
	 	$result = $project->selectProject();
	 	if ($result == 0) {
	 		$response['data'] = "No Data Found";
	 	}
	 	else {
	 		while ($rows = $result->fetch(PDO::FETCH_ASSOC)) {
	 			$response['data'] .= 
		 			'<div class="card w-full h-36 grid p-3 font-semibold shadow-lg rounded-md border dark:border-stone-800">
	                <h3>'.$rows["title"].'</h3>
	                <span class="text-center">'.$rows["stack"].'</span>
	                <span class="text-right text-slate-600 hover:text-slate-900 dark:hover:text-slate-700 focus:text-slate-900 duration-300 delay-100 transition-colors ease-in-out space-x-2">'.$rows["date"].'</span>
	            	</div>';
	 		}
	 	}
	 }
	 else{
		$response['data'] = "Error occurred...";
	 }
}


echo json_encode($response);