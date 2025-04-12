<?php 
require_once("../../../autoload/autoload.php");

$response = array(
	"status" => 0,
	"message" => "Form Submission Failed",
	"data" => []
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

if (isset($_POST['input'])) {
    $input = htmlspecialchars(stripslashes($_POST['input']));

	if (empty($input)) {

		$result = $social->selectAdmin();
		if ($result == 0) {
			$response['message'] = "No Data Found...";
		}
		else {
				if ($rows = $result->fetch(PDO::FETCH_ASSOC)) {
					$response['data'][] = [
						"github" => $rows['github'],
						"linkedln" => $rows['linkedln'],
						"skype" => $rows['skype'],
						"email" => $rows['email'],
						"whatsapp" => $rows['whatsapp']
					];
				 // $response['data'] .= 
				// 	 	'<li class="font-bold w-full">
		         //                 Github -
                 //                <span class="pl-3 space-x-2">
                 //                    <a href="'.$rows["github"].'"><i class="fa-solid fa-square-arrow-up-right text-blue-600"></i></a>
                 //                </span>
                 //            </li>

                 //            <li class="font-bold w-full">
		         //                 Linkedln -
                 //                <span class="pl-3 space-x-2">
                 //                    <a href="'.$rows["linkedln"].'"><i class="fa-solid fa-square-arrow-up-right text-blue-600"></i></a>
                 //                </span>
                 //            </li>

                 //            <li class="font-bold w-full">
		         //                 Skype -
                 //                <span class="pl-3 space-x-2">
                 //                    <a href="'.$rows["skype"].'"><i class="fa-solid fa-square-arrow-up-right text-blue-600"></i></a>
                 //                </span>
                 //            </li>

                 //            <li class="font-bold w-full">
		         //                 Whatsapp -
                 //                <span class="pl-3 space-x-2">
                 //                    <a href="'.$rows["whatsapp"].'"><i class="fa-solid fa-square-arrow-up-right text-blue-600"></i></a>
                 //                </span>
                 //            </li>

                 //            <li class="font-bold w-full">
		         //                 E-mail -
                 //                <span class="pl-3 space-x-2">
                 //                    <a href="'.$rows["email"].'"><i class="fa-solid fa-square-arrow-up-right text-blue-600"></i></a>
                 //                </span>
                 //            </li>
                 //            ';
			}
		}
	}
	else{
		$response['data'] = "Error occurred...";
	}
}

echo json_encode($response);