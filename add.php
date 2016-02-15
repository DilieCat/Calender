<?php
	require_once "add.logic.php";
	include "common/header.php";
?>
<h1>Voeg verjaardag toe</h1>
	<form method="post">
		<div>
			<label for="name">Persoon:</label>
			<input type="text" id="name" name="person">
		</div>
		
		 <label for="name"> Datum: </label>
		  <input type="number" name="day" min="1" max="31"?>
		  <select name="month_id">
		  <?php
		  foreach($monthlist as $month):
		  	?>
		  <option value="<?=$month['id']?>"><?=$month['name']?></option>
		<?php
		endforeach;
		?>
		  </select>
		  <input type="number" name="year" min="1900" max="2016">
		<br>
		<input type="submit" value="Save">
		</form>
		<form action="index.php">
	    <input type="submit" value="Ga terug">
	</form>
<?php

	include "common/footer.php";
?>