<?php include('server3.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Sancta Maria Karambo Teacher form </title>
  <link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body style="background-color:lightblue">
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="teacher3.php">
  	<?php include('errors3.php'); ?>
  	<div class="input-group">
  	  <label>firstName</label>
  	  <input type="text" name="firstName" value="<?php echo $firstName; ?>">
  	</div>
	  <div class="input-group">
  	  <label>lastName</label>
  	  <input type="text" name="lastName" value="<?php echo $lastName; ?>">
  	
  	<div class="input-group">
  	  <label>email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
      <div class="input-group">
        <label>Telephone:</label>
        <input type="tel" name="phone" value="<?php echo $username; ?>">
      </div>
</div>
<div class="input-group">
  <label>Username</label>
  <input type="text" name="username" value="<?php echo $username; ?>">
</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">SignUp</button>
  	</div>
  	<p>
  		Already have account? <a href="login3.php">SignIn</a>
  	</p>
  </form>
</body>
</html>