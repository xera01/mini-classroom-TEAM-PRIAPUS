<?php

	include('dbcon.php');

	if (isset($_POST['submit'])) 
	{
        $cname = $_POST['cname'];
        $cdetails = $_POST['cdetails'];

		mysqli_query($connect, "INSERT INTO announcement_tb(class_name) VALUE ('$cname'AND '$cdetails')");
		// echo "<h3 style='color:green;'>details Succesfully added</h3>";
		header("location:showAnnouncement.php");
	}

?>