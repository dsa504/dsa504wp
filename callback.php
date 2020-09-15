<?php
$captcha_response = $_POST['captcha'];
$key = '6LdjS8wZAAAAAOwUe-phkW9qvDZ3X0sPYprhhI0U';
$verification_response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=${key}&response=${captcha_response}");
$res = json_decode($verification_response);

if ($res->success==true) {
	$ajax_res = [
		'success' => true
	];
} else {
	$ajax_res = [
		'success' => false
	];
}

echo json_encode($ajax_res);
?>
