<html>
<head>
<title>Fragespiel</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style/style.css">

</head>
<body>
<header>
	<img src="" alt="Logo">
	
	<h1 id="headerh">QUIZSPIEL</h1>
	
		<div class="header-login">
			
			<?php
			if(isset($_COOKIE['user'])) {
			?>
				<form action="includes/logout.inc.php" method="post">
					<button type="submit" name="logout-submit" id="login">Abmelden</button>
				<form>
			
			<?php 
			}
			else {
			?>
			
				<form action="includes/login.inc.php" method="post">
					<input type="text" name="uidinput" placeholder="Benutzername/E-Mail" class="headerinput">
					<input type="password" name="pwdhdx" placeholder="Passwort" class="headerinput">
					<input type="submit" name="login-submit"id="login" value="login" id="login">
				</form>
				
				<form action="signup.php">
					<input type="submit" name="reg-submit" value="registrieren" id="reg">
				</form>
			<?php
				}
			?>
		</div>
	</header>