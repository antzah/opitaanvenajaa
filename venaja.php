<?php $title = "Venäjän kielen 100 yleisintä sanaa – satasanaa.fi"; ?>
<?php $desc = "Opettelemalla venäjän kielen sata yleisintä sanaa otat ison harppauksen kohti uuden kielen oppimista."; ?>
<?php include "header.php"; ?>

<!-- Venäjän sanalista -->
<script src="venaja.js"></script>
<!-- Alert if IE – toimii paremmin Chromella/Firefoxilla (niin kuin kaikki muukin) -->
<script src="iealert.js"></script>

<div class="container">

	<div id="sanadiv">
		<h2 id="sana">1</h2>
		<div id="lausuntadiv">
			<p id="lausuntalabel">Lausunta:</p>
			<p id="lausunta">2</p>
			<p onclick='responsiveVoice.speak("Hello World", "Russian Female");' id="kuuntele"><img src="sound.png"></p>
		</div>
		
	</div>

	<div id="vaihtoehdotdiv">
		<div id="choice1div" class="col-xs-6 choicediv">
			<p id="choice1"></p>
		</div>
		<div id="choice2div" class="col-xs-6 choicediv">
			<p id="choice2"></p>
		</div>
		<div id="choice3div" class="col-xs-6 choicediv">
			<p id="choice3"></p>
		</div>
		<div id="choice4div" class="col-xs-6 choicediv">
			<p id="choice4"></p>
		</div>
		<p id="vastaus"></p> <!-- Äijä huijaa! -->
	</div>

	<div id="scorediv">
		<h3 id="score">Pisteputki: 0</h3>
		<h3 id="sound">Äänet on/off</h3>
	</div>

</div>

<?php include "footer.php"; ?>