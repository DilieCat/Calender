<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"):
		$birthdays = NULL;
		if (isset($_GET['id'])):
			// Get Patient for id
			require "info.php";
			$id = $db->escape_string($_GET["id"]);
			
			$query = "select * from birthdays where id=$id";
			$result = $db->query($query);
		
			$birthdays = $result->fetch_assoc();

			require "info.php";

		    $query = "SELECT * FROM `month`";

			$result = mysqli_query($db, $query);
			$monthlist = mysqli_fetch_all($result,MYSQLI_ASSOC);	
			endif;
		if ($birthdays == NULL):
			// No patient found
			http_response_code(404);
			include("../common/not_found.php");
			exit();
		endif;
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
		require "info.php";
		
		// Prepare data for update
		$id = $db->escape_string($_POST["id"]);
		$name = $db->escape_string($_POST["name"]);
		$day = $db->escape_string($_POST["day"]);
		$year = $db->escape_string($_POST["year"]);
		$month = $db->escape_string($_POST["month_id"]);
		
		// Prepare query and execute
		$query = "update birthdays set person='$name', day='$day', year='$year', month_id='$month' where id=$id";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;

?>