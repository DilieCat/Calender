<?php
	
	require "info.php"; 

	$query = "SELECT birthdays.*, month.name as month_name 
			  FROM `birthdays`
			  LEFT JOIN `month`
			  ON month.id = birthdays.month_id
			  ORDER BY month_id, day ASC";
			
	$result = $db->query($query);
	
	$birthdays = $result->fetch_all(MYSQLI_ASSOC);
?>