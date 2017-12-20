<?php

include("config/connect.php");
include("header.php");
	session_start();
	if(!$_SESSION['userid']){
		header("LOCATION:login.php");
	}
	$post=$_POST['textarea'];
	$date=date("Y.m.d");
	$time=date("h.i.sa");
	$date_post = date("Y/m/d");
	$time_post = date("h:i:sa");
	$week_post = date("l");
	$i=0;
	
	$file = fopen('texts/text_'.$_SESSION['userid'].'_'.$date."_".$time.'.txt','w');
	$_SESSION['file_name'] = 'texts/text_'.$_SESSION['userid'].'_'.$date."_".$time.'.txt';
	fwrite($file , $date_post);
	fwrite($file ,'<br/>');
	fwrite($file , $time_post);
	fwrite($file ,'<br/>');
	fwrite($file , $week_post);
	fwrite($file ,'<br/>');
	fwrite($file , $post);
	$var = $_SESSION['userid'];
	$select_query = "SELECT visited FROM registered WHERE id='$var'";
	$query = mysqli_query($connection , $select_query);
	$data =mysqli_fetch_array($query);
		$i =$data['visited'];
		$i=$i+1;
	mysqli_query($connection , "UPDATE registered SET visited=$i WHERE id='$var'");
	$insert_query = "INSERT INTO posts SET
							postid='',
							post_date='$date',
							post_time='$time',
							post_man='$var'";
							mysqli_query($connection , $insert_query);
	
	header("LOCATION:thanks.php");
?>

<?php
include("footer.php")
?>