<?php
	include("header.php");
	include("config/connect.php");
	session_start();
	$error ='';
	$success='';
	if (isset($_REQUEST['button'])){
		
		$name =$_REQUEST['name'];
		$email=$_REQUEST['email'];
		$password=$_REQUEST['password'];
		
		if (empty($name)){
			$error .= 'please enter name<br/>';
		}
		if (empty($email)){
			$error .= 'please enter email<br/>';
		}
		if (empty($password)){
			$error .= 'please enter password<br/>';
		}
		if (!empty($name) and !empty($email) and !empty($password)){

				$select_query = "SELECT * FROM registered WHERE email='$email'";
				$check = mysqli_query($connection , $select_query);
				if (mysqli_num_rows($check)>=1){
					$error .= 'Account already exists for given e-mail address<br/>
					<a href="login.php">click here</a> to log in';
				}
				else{
					$query = "INSERT INTO registered SET
							id='',
							name='$name',
							email='$email',
							password='$password',
							date_added=NOW()";

					mysqli_query($connection , $query);
						$success .= 'ACCOUNT REGISTERED<br/>
						<a href="index.php">log in </a> to enter';
						$select = "SELECT * FROM registered WHERE email='$email'";
						$checker = mysqli_query($connection , $select);
						$data= mysqli_fetch_array($checker);
						$_SESSION['user']=$data['name'];
						$_SESSION['userid']=$data['id'];
						
				}
		}
	
	}

?>


<div id="back" >
	<table >
		<tr>
			<td id="color" height="290px" width="650px" > </td>
		</tr>
	</table>
</div>
<div id="input">
	<form action="reg.php" method="POST">
	<fieldset>
		<legend>sign up to get access</legend>
		<?php 
			echo $error;
			echo $success;
		?>
			<table width="575px">
			<tr >
				<td width="40%" align="center">Name</td>
				<td width="5%">:</td>
				<td width="55%"><input type="text" name="name" /></td>
			</tr>
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
				<td colspan="3" align="center"><input type="submit" name="button" class="subbutton" value="Register"/></td>
			</tr>
		</table>
	</fieldset>
	</form>
	<p align="center" name="new">Already have an account.<br/> <a href="login.php">login</a></p>
</div>


<?php
	include("footer.php");
?>