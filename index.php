<?php
include "/common/header.php";
require "index.logic.php";




	$currentMonth = "";
	foreach($birthdays as $birthday):
		if($currentMonth != $birthday['month_name'] ){
			$currentMonth = $birthday['month_name'];
			echo "<h1>" . $currentMonth . "</h1>";
		}
		

?>

<h2><?=$birthday['day']?></h2><p><a href="edit.php?id=<?=$birthday['id']?>"><?=$birthday['person']?> (<?=$birthday['year']?>)</a><a href="delete.php?id=<?=$birthday['id']?>"> X </a></p><br>



<?php
endforeach;
?>
<p><a href="add.php">Toevoegen</a></p>

<?php
include "/common/footer.php";
?>
