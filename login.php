<?php
	include("header.php");
	include("config/connect.php");
	session_start();
	$error ='';
	$success='';

	if (isset($_REQUEST['login'])){
		
		$email=$_REQUEST['email'];
		$password=$_REQUEST['password'];
		
		
		if (empty($email)){
			$error .= 'please enter email<br/>';
		}
		if (empty($password)){
			$error .= 'please enter password<br/>';
		}
		if (!empty($email) and !empty($password)){

				$select_query = "SELECT * FROM registered WHERE email='$email' and password='$password'";
				$check = mysqli_query($connection , $select_query);
				if (mysqli_num_rows($check)==0){
					$error .= 'Invalid username or password';
				}
				else{
						$data= mysqli_fetch_array($check);
						$_SESSION['name']=$data['name'];
						$_SESSION['userid']=$data['id'];
						header("Location:index.php");
					}
		}
	
	}

?>



<div id="back">
	<table >
		<tr>
			<td id="color" height="260px" width="650px" > </td>
		</tr>
	</table>
</div>
<div id="input">
	<form action="login.php" method="POST">
	<fieldset>
		<legend>log in to get access</legend>
		<?php 
			echo $error;
			echo $success;
		?>
			<table width="575px">
			
			<tr>
				<td width="40%" align="center">E-mail</td>
				<td width="5%">:</td>
				<td width="55%"><input type="email" name="email" /></td>
			</tr>
			<tr>
				<td width="40%" align="center">Password</td>
				<td width="5%">:</td>
				<td width="55%"><input type="password" name="password" /></td>
			</tr>
			<tr >
				<td colspan="3" align="center" ><input type="submit" class="subbutton" name="login" value="login"/></td>
			</tr>
		</table>
	</fieldset>
	</form>

	<p align="center" name="newlogin">create an account.<br/> <a href="reg.php">Sign up</a></p>
</div>


<?php
	include("footer.php");
?>