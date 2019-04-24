
	<?php
	include 'header.php';
	?>
	<div id="all">
		<div id="main">
			<div id="form">
				<form action="includes/login_login.inc.php" method="post">

					<p id="hdx">Login</p>
					<?php
					if (isset($_GET['error'])) {
					?>
						<div class="errormsgbox">
							<?php
							if(isset($_GET['error'])) {
								if($_GET['error'] =="zuwenigangaben") {
								?>
									<p class="errormsg">Bitte füllen Sie alle Pflichtfelder aus</p>
								<?php
								}
								else if ($_GET['error'] == "falschespasswort") {
								?>
									<p class="errormsg">Passwort ist falsch</p>
								<?php
								}
								else if ($_GET['error'] == "keinbenutzer") {
								?>
									<p class="errormsg">Falscher Benutzername/E-Mail</p>
								<?php
								}
								else if ($_GET['error'] == "sqlerror") {
								?>
									<p class="errormsg">SQL Error</p>
								<?php
								}
							}
							?>
					</div>
					<?php
					}
					?>
					
					<input type="text" name="uidinput" placeholder="Benutzername/E-Mail" class="inputd">
		
					<input type="password" name="pwdhdx" placeholder="Passwort" class="inputd"><br>
			
					<input type="submit" name="submit"id="loginn" value="login">

					<div id="">
						<a href="login.php"><p>Noch nicht registriert?</p></a>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>