<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="css/jquery.min.js"></script>
  <script src="css/bootstrap.min.js"></script>
  </head>
<body>
<?php
	require('conect.php');
	session_start();
    // insert values if form is subbnited
    if (isset($_POST['user_name'])){
		
		$username = stripslashes($_REQUEST['user_name']); // removes characters
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['passwd']);
		$password = mysqli_real_escape_string($con,$password);
		
	//Check user in table users
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['user_name'] = $username;
			header("Location: index.php"); // index website
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='signin.php'>Login</a></div>";
				}
    }else{
?>
<h1>Login user</h1>
<div class="form-group">

<form action="" method="post" name="login">
<input type="text" name="user_name" placeholder="Username" required />
<input type="password" name="passwd" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='register.php'>Register Here</a></p>


</div>
<?php } ?>


</body>
</html>
