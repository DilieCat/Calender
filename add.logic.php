require "info.php";<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"):
		require "info.php";

		
		// Prepare data for insertion
		$person = $db->escape_string($_POST["person"]);
		$year = $db->escape_string($_POST["year"]);
		$day = $db->escape_string($_POST["day"]);
		$month_id = $db->escape_string($_POST["month_id"]);
		
		// Prepare query and execute
		$query = "insert into birthdays (person, year, day, month_id) values ('$person','$year','$day', '$month_id')";
		$result = $db->query($query);

    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
    else:
    	require "info.php";

    	$query = "SELECT * FROM `birthdays`";

		$result = mysqli_query($db, $query);
		$birthdayslist = mysqli_fetch_all($result,MYSQLI_ASSOC);

		$query2 = "SELECT * FROM `month`";

		$result2 = mysqli_query($db, $query2);
		$monthlist = mysqli_fetch_all($result2,MYSQLI_ASSOC);	
	endif;

?>