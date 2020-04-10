<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css.css" />
</head>
<body>
<?php
require('database.php');
if (isset($_REQUEST['username'])){
	$username = stripslashes($_REQUEST['username']);

	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);

	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);


        $query = "INSERT into `users` (username, password, email)
VALUES ('$username', '".md5($password)."','$email')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>Registered successfully.</h3>
<br/>Click here to <a href='login.php'> Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<label>Username: </label>
<input type="text" name="username" placeholder="Username" required />
<label>Email: </label>
<input type="email" name="email" placeholder="Email" required />
<label>Password: </label>
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
</form>
<p>Already Registered ? <a href='login.php'> Login here</a></p>
</div>
<?php } ?>
</body>
</html>
