<?php
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$email_id = $_POST['email_id'];
 	 $password = $_POST['password'];
		$password_2 = $_POST['password_2'];
		if(!empty($user_name) && !empty($password) && !is_numeric($user_name)&& !empty($email_id)&& !empty($password_2))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,email_id,password) values ('$user_id','$user_name','$email_id','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="stylesheet" href="css/master.css">
</head>


	<style type="text/css">

.bg{
	background: url("main1.jpg");
}
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}
.center{
text-align: center;
}

h5{
	color: white;
}
	#box{

		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 40px;
		position: relative;
		top:25px;
	}

	</style>
<body class="bg">
	<div id="box">

		<form  method="post">
			<div class="center" style="font-size: 2rem;margin: 10px;color: white;">Signup</div>
<h5>Username</h5>
			<input id="text" type="text" name="user_name" required>
			<h5>Your Name</h5>
				<input id="text" type="text" name="name" required>
				<h5>Your Email</h5>
			<input id="text" type="text" name="email_id" required>
			<h5>Password</h5>
			<input id="text" type="password" name="password" required>
			<h5>Confirm password</h5>
		<input id="text" type="text" name="password_2" required><br><br>

			<input id="button" type="submit" value="Signup"><br><br>
			<p>Already an user
<a href="login.php"> Login</a></p>

		</form>
	</div>
</body>
</html>
