
<?php
include 'includes/header.php';
?>
<div id="all">
	<div id="main">
		<div id="form">
			<form action="includes/register.inc.php" method="POST">
				<p id="hdx">Registrieren</p>
				
				<?php
				if (isset($_GET['error'])) {
				?>
					<div class="errormsgbox">
						<?php
						if(isset($_GET['error'])) {
							if($_GET['error'] =="leerefelder") {
							?>
								<p class="errormsg">leere Felder</p>
							<?php
							}
							else if ($_GET['error'] == "falscherbenutzername") {
							?>
								<p class="errormsg">Der Benutzername darf nur Buchstaben und Zahlen enthalten</p>
							<?php
							}
							else if ($_GET['error'] == "falscheemail") {
								?>
								<p class="errormsg">Ungültige E-Mail</p>
							<?php
							}
							else if ($_GET['error'] == "falschespasswort") {
							?>
								<p class="errormsg">Passwörter stimmen nicht überein</p>
							<?php 
							}
							else if ($_GET['error'] == "passwortunsicher") {
							?>
								<p class="errormsg">Passwort unsicher</p>
							<?php 
							}
							else if ($_GET['error'] == "sqlerror") {
							?>
								<p class="errormsg">Sql Error</p>
							<?php 
							}
							else if ($_GET['error'] == "usertaken") {
							?>
								<p class="errormsg">Der Benutzername exestiert bereits</p>
							<?php
							}
						}
						?>
					</div>
				<?php
				}
				?>
		
				<h3>Persönliche Daten</h3>
				
					<input type="text" name="vorname" placeholder="Vorname" class="input">

					<input type="text" name="nachname" placeholder="Nachname" class="input">

				<h3>Spieldaten</h3>
					
						
		
					<select name="avatar" class="input">
						<option value="blackwidow">Blackwidow</option>
						<option value="deadpool">Deadpool</option>
					</select>

					<input type="text" name="uid" placeholder="Benutzername" class="input">
						
					<input type="text" name="email" placeholder="E-Mail" class="input">
						
					<input type="password" name="password" placeholder="Passwort" class="input">
						
					<input type="password" name="password2" placeholder="Passwort Wiederholen" class="input">
						
					<input type="submit" name="submit" id="main_login" value="registrieren">
					
					<div id="">
						<a href="login.php"><p>Du haast bereits ein Konto?</P></a>
					</div>
			</form>	
		</div>
	</div>
</div>

</body>
</html>