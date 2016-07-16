<?php include "header.php"; ?>

<div class="index-main container">
	<h2>Ota yhteyttä</h2>
	<br>
	<form role="form">
		<div class="form-group">
			<label for="email">Sähköpostiosoitteesi:</label>
			<input required type="email" class="form-control" id="email">
		</div>
		<div class="form-group">
			<label for="pwd">Viestisi:</label>
			<textarea required class="form-control" rows="3"></textarea>
		</div>
		<input required type="checkbox" name="vehicle" value="Bike"> En ole robotti :^)<br><br>
		<button type="submit" class="btn btn-default">Lähetä viesti</button>
	</form>
</div>

<?php include "footer.php"; ?>