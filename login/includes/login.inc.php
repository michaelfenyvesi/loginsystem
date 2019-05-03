<?php
	require 'dbh.inc.php';
	
	$uid = $_POST['uidinput'];
	$password = $_POST['pwdhdx'];
	$url = $_SERVER['REQUEST_URI'];
	
	if (empty($uid) or empty($password)) {
		header("location: ../login.php?error=zuwenigangaben");
		exit();
	}
	else {
		$sql ="SELECT * FROM register WHERE uid=?";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			header("location: ../login.php?error=sqlerror");
			exit();
		}
		else {
			mysqli_stmt_bind_param($stmt, "s", $uid);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			
			if ($row = mysqli_fetch_assoc($result)) {
				$pwdCheck = password_verify($password, $row['pwd']);
				
				
				if ($pwdCheck == true) {
					
					setcookie("user", "$uid", time() + 86400*39, "/");
					
					header("location: ../kategorie.php");
					exit();
				}
				else {
					header("location: ../login.php?error=falschespasswort");
					exit();
				}
			}
			else {
					header("location: ../login.php?error=keinbenutzer");
					exit();
			}
		} 
	}



?>
