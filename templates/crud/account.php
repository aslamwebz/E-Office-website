<?php

require('../../config.php');

if(isset($_POST['register'])){

		$username = sanitize($_POST['username']);
		$firstname = sanitize($_POST['firstname']);
		$lastname = sanitize($_POST['lastname']);
		$address = sanitize($_POST['address']);
		$mobile = sanitize($_POST['mobile']);
		$email = $_POST['email'];
		$confirmemail = $_POST['confirmEmail'];
		$password = sanitize($_POST['password']);
		$confirmpassword = sanitize($_POST['confirmPassword']);
        $clientPermission = sanitize($_POST['permission']);
        $hash = 'a';

        echo $registerSql = "INSERT INTO client VALUES('', '$username', '$lastname', '$firstname','$mobile','$address','$address','$email','$hash','$clientPermission')";
        if (!$db->query($registerSql)){
            printf("Errormessage: %s\n", $db->error);
        } else {
            setLog('Blog Add', $_SESSION['userName'], 'new client added', $db);
            header('Location: ../../login.php');
        }
	};
