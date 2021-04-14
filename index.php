<?php

include("auth.php"); //sesiones en website?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome website</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="css/jquery.min.js"></script>
  <script src="css/bootstrap.min.js"></script>  </head>
<body>
<div class="form">

<p>Welcome <?php echo $_SESSION['user_name']; ?>!</p>
<p>page1</p>
<a href="logout.php">Logout</a>

</div>
</body>
</html>
