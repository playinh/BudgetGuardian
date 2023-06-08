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
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> Login</title>
        <link rel="stylesheet" href="style-login.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700&display=swap" rel="stylesheet">
    </head>
    <body>
        <main>
	
            <div class="flex">
            
				<div class="image">
					<section>
						<img src="images/image-login.png" width="400" height="600" alt="budget pic">
					</section>
				</div>
                <div class="text">
                    <h1>Log in</h1>
                    <p>Want to create an account? <a href="signup.php">Click here</a></p>
                </div>
                <div class="input">
                    <form method="post" class="form">
                        <input id="text" type="text" class="username" name="user_name" placeholder="Username" required> 
                        <input id="text" type="password" class="password" name="password" placeholder="Password" required> 
                        <input id="button" type="submit" class="button" value="Log in">
                        
                    </form>
                </div>
            
            </div>
		
        </main>
    </body>
</html>