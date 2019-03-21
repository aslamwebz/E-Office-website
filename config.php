<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'eoffice';

$db = mysqli_connect($host, $username, $password, $database);

if(mysqli_connect_errno()){
	echo "An error has occured with the database " . mysqli_connect_error();
}

function is_admin($perm, $message){
	if(isset($_SESSION['userID']) && $_SESSION['permission'] === $perm){
		return true;
	}else{
		$_SESSION['error'] = $message;
		header('Location: login.php');
	}
}

function is_logged_in($perm){
	if(isset($_SESSION['userID']) && $_SESSION['permission'] === $perm){
		return true;
	}else{
		$_SESSION['error'] = 'Please Login or Register to continue';
		header('Location: login.php');
	}
}



function setLog($logname, $user, $message, $db){
	$date = date('d:m:Y');
	$time = date('H:i');
	$dt = ' At ' . $time . ' on ' . $date;
	$sql = "INSERT INTO log VALUES ('', '$logname', '$dt', '$user', '$message')";
	$db->query($sql);
}

function logout(){
	unset($_SESSION['userID']);
	unset($_SESSION['userName']);
	unset($_SESSION['permission']);
	session_destroy() ;
	header('Location: login.php');
}

function sanitize($clean){
	// $clean = trim($clean);
	// $clean = stripslashes($clean);
	// $clean = htmlspecialchars($clean);
	// $clean = strip_tags($clean);
	$clean = htmlentities($clean, ENT_QUOTES, "UTF-8");
	return  $clean;
}

function generate_token(){
	$token = "qwertyuipasdfghjklzxcvbnm1234567890";
	$token = str_shuffle($token);
	$token = substr($token, 0, 20);
	echo $token;
}

function email_reset(){
	$token = "qwertyuipasdfghjklzxcvbnm1234567890";
	$token = str_shuffle($token);
	$token = substr($token, 0, 20);
	echo $token;
}

function redirect($page){
	$permission = $_SESSION['permission'];
	if($permission === 'admin'){
		$re = 'admin.php';
	}elseif($permission === 'employee'){
		$re = 'employee.php';
	}elseif($permission === 'client'){
		$re = 'client.php';
	}else{
		$re = 'admin.php';
	}
	header('Location: '.$re.'?'.$page);	
}

function encrypt($normal){
	$hashed = password_hash($normal, PASSWORD_DEFAULT); 
	return $hashed;
}



require_once("stripe-php/init.php");

$stripeDetails = [
	'sk' => "sk_test_jZkVFiL3UiJBnTImkLRdnJA1",
	'pk' => "pk_test_9KuFtUOrr7GHBdNyoJc1PyAs",
];

\Stripe\Stripe::setApiKey($stripeDetails['sk']);

