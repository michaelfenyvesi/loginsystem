<?php

if(isset($_POST['submit'])) {
	
	require 'dbh.inc.php';
	
	$vorname = $_POST["vorname"];
	$nachname = $_POST["nachname"];
	$avatar = $_POST["avatar"];
	$uid = $_POST["uid"];
	$email = $_POST["email"];
	$passwort1 = $_POST["password"];
	$passwort2 = $_POST["password2"];
	
	

	if(empty($uid) or  empty($email) or  empty($passwort1) or  empty($passwort2)){
		header("location: ../signup.php?error=leerefelder&vorname=".$vorname."&nachname=".$nachnmae."&avatar=".$avatar."&uid=".$uid."&email=".$email);
		exit();
	}

	elseif (!preg_match("/^[a-zA-Z0-9]*$/", $uid,)) {
		header("location: ../signup.php?error=falscherbenutzername&vorname=".$vorname."&nachname=".$nachnmae."&avatar=".$avatar."&email=".$email);
		exit();
	}

	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		header("location: ../signup.php?error=falscheemail&vorname=".$vorname."&nachname=".$nachnmae."&avatar=".$avatar."&uid=".$uid);
		exit();
	}
	
	elseif ($passwort1 !== $passwort2) {
		header("location: ../signup.php?error=falschespasswort&vorname=".$vorname."&nachname=".$nachnmae."&avatar=".$avatar."&uid=".$uid."&email=".$email);
		exit();
	}
	else if(strlen($passwort1) < 4){
		header("location: ../signup.php?error=passwortunsicher&vorname=".$vorname."&nachname=".$nachnmae."&avatar=".$avatar."&uid=".$uid."&email=".$email);
		exit();
	}

	else {
		$sql = "SELECT uid FROM register Where uid=?";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("location: ../signup.php?error=sqlerror");
			exit();
		}
		else {
			mysqli_stmt_bind_param($stmt, "s", $uid);
			mysqli_stmt_execute($stmt);
			mysqli_stmt_store_result($stmt);
			$resultCheck = mysqli_stmt_num_rows($stmt);
			if ($resultCheck > 0) {
				header("location: ../signup.php?error=usertaken&vorname=".$vorname."&nachname=".$nachnmae."&avatar=".$avatar."&uid=".$uid."&email=".$email);
				exit();
			}
			else {
				$sql = "INSERT INTO  register(first, last, avatar, uid, email, pwd) VALUES(?,?,?,?,?,?)";
				$stmt = mysqli_stmt_init($conn);
				if (!mysqli_stmt_prepare($stmt, $sql)) {
					header("location: ../signup.php?error=sqlerror");
					exit();
				}
				else {
					$hashedpwd = password_hash($passwort1, PASSWORD_DEFAULT);
					
					mysqli_stmt_bind_param($stmt, "ssssss", $vorname, $nachname, $avatar, $uid, $email, $hashedpwd);
					mysqli_stmt_execute($stmt);
					setcookie("user", "$uid", time() + 86400*39, "/");
					header("location: ../kategorie.php");
					exit();
					}
				}
			}
		}
	}

	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	