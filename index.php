
	<?php
	require	'header.php';
	?>

	<div id="all">
		<div id="main">
		<?php
			if(isset($_COOKIE['user'])) {
				echo "logged in<br>" . $_COOKIE['user'];
			} else {
				echo "logged out<br>";
			}
		?>
			<div id="form">
			

				<h1 class="überschrift">Quizspiel</h1>
				<p>Dir werden in verschiedenen Kategorien Fragen gestellt die du beantworten musst. Für jede korrekt beantworte Frage bekommst du Punkte. Ziel ist es, mehr Punkte als dein Computergegner zu erreichen.</p>

				<form action="play.php" method="post">
					<input type="submit" name="play" id="play" value="play">
				</form>
				
			</div>
		</div>
	</div>
</body>
</html>