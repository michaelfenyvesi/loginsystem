
		<?php
	include 'header.php';
	?>
	<div id="all">
		<div id="main">
			<div id="form">
				<form action="includes/login.inc.php" method="post">
					<h1 class="ueberschrift">Login</h1>
					<?php
					if (isset($_GET['error'])) {
					?>
						<div class="errormsgbox">
							<?php
							if(isset($_GET['error'])) {
								if($_GET['error'] =="zuwenigangaben") {
								?>
									<p class="errormsg">Bitte f&uumlllen Sie alle Pflichtfelder aus</p>
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
					
					<input type="text" name="uidinput" placeholder="Benutzername" class="input">
		
					<input type="password" name="pwdhdx" placeholder="Passwort" class="input"><br>
					
					<input type="submit" name="submit"id="main_login" value="login">
					
					<a id="lostpwd" href=""><p>Passwort vergessen?</P></a>

				</form>
			</div>
		</div>
	</div>
	
	<footer>
	<footer>
</body>
</html>
