<?php 
require_once("../../../autoload/autoload.php");

$response = array(
	"status" => 0,
	"message" => "Form Submission Failed",
	"data" => []
);


// ADD SKILL STARTS
if (isset($_POST['addSkill'])) {
		$name = htmlspecialchars(stripslashes($_POST['name']));
		$experience = htmlspecialchars(stripslashes($_POST['experience']));
		$type = htmlspecialchars(stripslashes($_POST['type']));

		if (empty($name) || empty($experience) || empty($type)) {
			$response['message'] = "Field cannot be empty";
		}	
		else{
			switch ($type) {
				case 'languages':
					$digitType = 1;
					break;
				case "frameworks":
					$digitType = 2;
					break;
				case "others":
					$digitType = 3;
					break;
				
				default:
					$digitType = 0;
					break;
			} 

			$result = $skill->createSkill($name, $experience, $digitType);
			if ($result == 0) {
				$response['message'] = "Database error occured";
			}
			elseif ($result == 1) {
				$response['status'] = 1;
				$response['message'] = "Skill created successfully";
			}
		}
}
// ADD SKILL ENDS

// EDIT SKILL STARTS
if (isset($_POST['editSkill'])) {
	$name = htmlspecialchars(stripslashes($_POST['name']));
	$experience = htmlspecialchars(stripslashes($_POST['experience']));
	$type = htmlspecialchars(stripslashes($_POST['type']));

	if (empty($name) || empty($experience) || empty($type)) {
		$response['message'] = "Input field cannot be empty";
	}
	else{
		if (!isset($_POST['skill_id'])) {
			$response['message'] = "Id not found";
		}
		$id = filter_input(INPUT_POST, "skill_id", FILTER_SANITIZE_NUMBER_INT);
		
		switch ($type) {
				case 'languages':
					$digitType = 1;
					break;
				case "frameworks":
					$digitType = 2;
					break;
				case "others":
					$digitType = 3;
					break;
				
				default:
					$digitType = 0;
					break;
			}

		$result = $skill->updateSkill($id, $name, $experience, $digitType);
		if ($result == 0) {
			$response['message'] = "Database error occurred";
		}
		elseif ($result == 1){
			$response['message'] = "Skill updated successfully";
			$response['status'] = 1;
		}
	}

}
// EDIT SKILL ENDS


// DELETE SKILL STARTS
if (isset($_POST['delete_skill'])) {
	$id = filter_input(INPUT_POST, "skill_id", FILTER_SANITIZE_NUMBER_INT);
	$result = $skill->deleteSkill($id);
	if ($result == 0) {
		$response['message'] = "Database error occurred";

	}
	elseif ($result == 1){
		$response['message'] = "Skill deleted successfully!";
		$response['status'] = 1;
	}
}
// DELETE SKILL ENDS

// DISPLAY SKILL STARTS
if (isset($_POST['input'])) {
    $input = htmlspecialchars(stripslashes($_POST['input']));

	if (empty($input)) {

		$result = $skill->selectSkill();
		if ($result == 0) {
			$response['message'] = "No Data Found...";
		}
		else {
			while ($rows = $result->fetch(PDO::FETCH_ASSOC)) {
			 $response['data'][] = [
			 	'name' => $rows['name'],
			 	'experience' => $rows['experience'],
			 	'id' => $rows['id'],
			 	'type' => $rows['type']
			 ]; 
			}
		}
	}
	else{
		$response['data'] = "Error occurred...";
	}
}
// DISPLAY SKILL ENDS

echo json_encode($response);

