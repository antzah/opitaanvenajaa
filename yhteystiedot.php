<?php $title = "Ota yhteyttä – satasanaa.fi"; ?>
<?php $desc = "Satasanaa.fi on vasta alkutekijöissään – yhteydenotot ja palaute ovat tervetulleita!"; ?>
<?php include "header.php"; ?>

<div class="index-main container">
	<h2>Ota yhteyttä</h2>
	<br>
	<form role="form" method="post" action="https://formspree.io/anssi.hautaviita@gmail.com">
		<div class="form-group">
			<label for="email">Sähköpostiosoitteesi:</label>
			<input required name="email" type="email" class="form-control" id="email">
		</div>
		<div class="form-group">
			<label for="pwd">Viestisi:</label>
			<textarea required class="form-control" rows="3" name="message" id="message"></textarea>
		</div>
		<input type="submit" class="btn btn-default" value="Lähetä viesti">
	</form> 
</div>

<?php include "footer.php"; ?>