<?php

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);

					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}

			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<style type="text/css">

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
	.{
		text-align: center;
	}
	h5{
		color: white;
	}
	#box{

		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
		position: relative;
	top: 200px;
	}

	</style>

	<div id="box">

		<form class="center" method="post">
			<div style="font-size: 2rem;margin: 10px;color: white; text-align:center;">Login</div>
<h5>Username</h5>
			<input id="text" type="text" name="user_name"><br>
				<h5>Password</h5>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>
 <p >
	Not an User <a  href="signup.php"> Signup</a></p>

		<br><br>
		</form>
	</div>
</body>
</html>
