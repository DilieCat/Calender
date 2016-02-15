<?php
	require_once "edit.logic.php";
	include "common/header.php";
?>
<h1>Wijzig verjaardag</h1>
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$birthdays['id']?>">
			<label for="name">Persoon:</label>
			<input type="text" id="name" name="name" value="<?=$birthdays['person']?>">
		</div>
		
		 <label for="name"> Datum: </label>
		  <input type="number" name="day" min="1" max="31" value="<?=$birthdays['day']?>">
		  <select name="month_id">
		  <?php
		  foreach($monthlist as $month):
		  	?>
		  <option value="<?=$month['id']?>" <?php if ($birthdays['month_id'] == $month['id']) { echo 'selected'; } ?> ><?=$month['name']?></option>
		<?php
		endforeach;
		?>
		  </select>
		  <input type="number" name="year" min="1900" max="2016" value="<?=$birthdays['year']?>">
		<br>
		<input type="submit" value="Save">
		</form>
		<form action="index.php">
	    <input type="submit" value="Ga terug">
	</form>
<?php

	include "common/footer.php";
?>