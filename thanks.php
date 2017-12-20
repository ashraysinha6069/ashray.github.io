<?php
	session_start();
	include ("header.php");
	include ("config/connect.php");
	if (!isset($_SESSION['userid'])){
		header("Location:login.php");
	}
	
?>
<h1 style="font-size:150px; margin:auto; width:500px; font-family: 'Indie Flower', cursive;">Thanks</h1><br/><br/><br/><br/>
<p style="font-size: 50px; margin:auto; width:150px; font-family: 'Barlow', sans-serif;">Go To</p>
<p style="font-size: 50px; margin:auto; width:200px; font-family: 'Barlow', sans-serif;"><a href="index.php">Timeline</a></p>


<?php
include ("footer.php");
?>