<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="css/jquery.min.js"></script>
  <script src="css/bootstrap.min.js"></script>
  </head>
<body>
<?php
	require('conect.php');
    // insert values if form is submited
    if (isset($_REQUEST['user_name'])){
		$username = stripslashes($_REQUEST['user_name']); 
		$username = mysqli_real_escape_string($con,$username); 
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);

		$date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, date) VALUES ('$username', '".md5($password)."', '$email', '$date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='signin.php'>Login</a></div>";
        }
    }else{
?>
<div class="panel panel-default">

<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="user_name" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
</form>
<br /><br />

</div>
</div>
<?php } ?>
</body>
</html>
