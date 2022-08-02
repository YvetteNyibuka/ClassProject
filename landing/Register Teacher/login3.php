<?php include('server3.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Teacher log in form login form</title>
  <link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login3.php">
  	<?php include('errors3.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="teacher3.php">Sign up</a>
  	</p>
  </form>
</body>
</html>