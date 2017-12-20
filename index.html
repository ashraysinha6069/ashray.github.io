<?php
	
	
include("config/connect.php");
include("header.php");
	session_start();
	if(!$_SESSION['userid']){
		header("LOCATION:login.php");
	}


?>
<form action="poster.php" method="POST">

	<textarea name="textarea">what's on your mind</textarea>
	<input type="submit" name="button" value="POST" />
</form>
<br/>
<br/>
<br/>
<br/>

<?php

if (isset($_SESSION['userid'])){
		$var = $_SESSION['userid'];
		$select_query = "SELECT visited FROM registered WHERE id='$var'";
		$query = mysqli_query($connection , $select_query);
		$data =mysqli_fetch_array($query);
		$date_array=array();
		$time_array=array();
		$i =$data['visited'];
		$post_query = "SELECT post_time FROM posts WHERE post_man='$var' ORDER BY postid DESC";
		$post_select = mysqli_query($connection , $post_query);
		while(!is_null(mysqli_num_rows($post_select))){
			$select  = mysqli_fetch_array($post_select);
		if(!is_null($select)){
			array_push($time_array, $select['post_time']);
		}
		
		else{
			break;
		}
}
	$post_query2 = "SELECT post_date FROM posts WHERE post_man='$var' ORDER BY postid DESC";
		$post_select2 = mysqli_query($connection , $post_query2);
		while(!is_null(mysqli_num_rows($post_select2))){
			$select2  = mysqli_fetch_array($post_select2);
		if(!is_null($select2)){
			array_push($date_array, $select2['post_date']);
		}
		else{
			break;
		}
}
for ($a=0;$a<$i;$a=$a+1){
	$file = fopen('texts/text_'.$_SESSION['userid'].'_'.$date_array[$a]."_".$time_array[$a].'.txt','r');
	$output = fread($file , filesize('texts/text_'.$_SESSION['userid'].'_'.$date_array[$a]."_".$time_array[$a].'.txt'));
	
	echo $output;
	echo '<br/>';
	echo '<br/>';
	echo '<br/>';
}
}


echo '<a href="logout.php">log out</a>';
include ("footer.php");
?>
