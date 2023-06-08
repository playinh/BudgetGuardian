<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

		
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup</title>
    <link rel="stylesheet" href="style-signup.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway: 306,400,700&display=swap" rel="stylesheet">
</head>
    <body>
        <main>
            <div class="flex">
                <div class="text">
                    <h1>Sign up</h1>
                    <p>Already have an account? <a href="Login.php">Click here to go back</a> </p>
                </div>
                <div class="input">
                    <form method = "post" class="form">
                        <input id="text" type="text" class="username" name="user_name" placeholder="Username" required>
                        <input id="text" type="password" class="password" name="password" placeholder="Password" required>
                        <input id="button" type="submit" class="button" value="Sign up">
                    </form>
                </div>
            </div>
        </main>
    </body>
</html>