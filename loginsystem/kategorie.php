	<?php
	require 'header.php';
	?>
	
	<script>
            function ButtonColor(btn){
               document.getElementById(btn).style.backgroundColor="rgba(180,180,180)";
            }
    </script>
	
	<div id="main">
		<div id="box">
				<h1>Kategorien:</h1>
				<span id="p">Je höher der Gewinnwert, desto schwieriger werden die Fragen!</span>	
		</div>
		
		<form action="includes/kategorie.inc.php" method="post">
			<div id="kategorieall">
				<div class="spalte">
					<div class="kattegorie">
						<p class="text">TV</p>
					</div>
					
					<input class="antwort" name="antwort" value="1" type="radio" /><label id="TV1" onclick="ButtonColor('TV1')" class="button" for="TV1"><span class="text">€ 100</span></label>
					<input class="antwort" name="antwort" value="2" type="radio" /><label id="TV2" onclick="ButtonColor('TV2')" class="button" for="TV2"><span class="text">€ 200</span></label>
					<input class="antwort" name="antwort" value="3" type="radio" /><label id="TV3" onclick="ButtonColor('TV3')" class="button" for="TV3"><span class="text">€ 500</span></label>
					<input class="antwort"name="antwort" value="4" type="radio" /><label id="TV4" onclick="ButtonColor('TV4')" class="button" for="TV4"><span class="text">€ 750</span></label>
				</div>
							
				<div class="spalte">
					<div class="kattegorie">
						<p class="text">SSD</p>
					</div>
					
					<input class="antwort" name="antwort" value="5" type="radio" /><label id="SSD1" onclick="ButtonColor('SSD1')" class="button" for="SSD1"><span class="text">€ 100</span></label>
					<input class="antwort" name="antwort" value="6" type="radio" /><label id="SSD2" onclick="ButtonColor('SSD2')" class="button" for="SSD2"><span class="text">€ 200</span></label>
					<input class="antwort" name="antwort" value="7" type="radio" /><label id="SSD3" onclick="ButtonColor('SSD3')" class="button" for="SSD3"><span class="text">€ 500</span></label>
					<input class="antwort"name="antwort" value="8" type="radio" /><label id="SSD4" onclick="ButtonColor('SSD4')" class="button" for="SSD4"><span class="text">€ 750</span></label>
					<input class="antwort" name="antwort" value="9" type="radio" /><label id="SSD5" onclick="ButtonColor('SSD5')"class="button" for="SSD5"><span class="text">€ 1000</span></label>
				</div>
				
				<div class="spalte">
					<div class="kattegorie">
						<p class="text">Web</p>
					</div>
					
					<input class="antwort" name="antwort" value="10" type="radio" /><label id="WEB1" onclick="ButtonColor('WEB1')" class="button" for="WEB1"><span class="text">€ 100</span></label>
					<input class="antwort" name="antwort" value="11" type="radio" /><label id="WEB2" onclick="ButtonColor('WEB2')" class="button" for="WEB2"><span class="text">€ 200</span></label>
					<input class="antwort" name="antwort" value="12" type="radio" /><label id="WEB3" onclick="ButtonColor('WEB3')" class="button" for="WEB3"><span class="text">€ 500</span></label>
					<input class="antwort"name="antwort" value="12" type="radio" /><label id="WEB4" onclick="ButtonColor('WEB4')" class="button" for="WEB4"><span class="text">€ 750</span></label>
					<input class="antwort" name="antwort" value="14" type="radio" /><label id="WEB5" onclick="ButtonColor('WEB5')"class="button" for="WEB5"><span class="text">€ 1000</span></label>
				</div>
				
				<div class="spalte">
					<div class="kattegorie">
						<p class="text">Sport</p>
					</div>
					
					<input class="antwort" name="antwort" value="1" type="radio" /><label id="SPORT1" onclick="ButtonColor('SPORT1')" class="button" for="SPORT1"><span class="text">€ 100</span></label>
					<input class="antwort" name="antwort" value="2" type="radio" /><label id="SPORT2" onclick="ButtonColor('SPORT2')" class="button" for="SPORT2"><span class="text">€ 200</span></label>
					<input class="antwort" name="antwort" value="3" type="radio" /><label id="SPORT3" onclick="ButtonColor('SPORT3')" class="button" for="SPORT3"><span class="text">€ 500</span></label>
					<input class="antwort"name="antwort" value="4" type="radio" /><label id="SPORT4" onclick="ButtonColor('SPORT4')" class="button" for="SPORT4"><span class="text">€ 750</span></label>
				</div>
				
				<div class="spalte">
					<div class="kattegorie">
						<p class="text">TUWIEN</p>
					</div>
					
					<input class="antwort" name="antwort" value="1" type="radio" /><label id="TUWIEN1" onclick="ButtonColor('TUWIEN1')" class="button" for="TUWIEN1"><span class="text">€ 100</span></label>
					<input class="antwort" name="antwort" value="2" type="radio" /><label id="TUWIEN2" onclick="ButtonColor('TUWIEN2')" class="button" for="TUWIEN2"><span class="text">€ 200</span></label>
					<input class="antwort" name="antwort" value="3" type="radio" /><label id="TUWIEN3" onclick="ButtonColor('TUWIEN3')" class="button" for="TUWIEN3"><span class="text">€ 500</span></label>
					<input class="antwort"name="antwort" value="4" type="radio" /><label id="TUWIEN4" onclick="ButtonColor('TUWIEN4')" class="button" for="TUWIEN4"><span class="text">€ 750</span></label>
					<input class="antwort" name="antwort" value="5" type="radio" /><label id="TUWIEN5" onclick="ButtonColor('TUWIEN5')"class="button" for="TUWIEN5"><span class="text">€ 1000</span></label>
				</div>
				
			
			</div>
			
			<input id ="kategorie-submit" type="submit" name="kategoriesubmit" value="wählen">
		</form>
	</div>	
	<footer id="footer">
	<footer>
	</body>
</html>