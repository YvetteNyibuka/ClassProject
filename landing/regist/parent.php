
<?php include('parentServer.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Sancta Maria Karambo student form </title>
  <link rel="stylesheet" type="text/css" href="parent.css">
</head>
<body style="background-color:lightblue">
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="parent.php">
  	<?php include('parentError.php'); ?>
  	<div class="input-group">
  	  <label>firstName</label>
  	  <input type="text" name="firstName" value="<?php echo $firstName; ?>">
  	</div>
	  <div class="input-group">
  	  <label>lastName</label>
  	  <input type="text" name="lastName" value="<?php echo $lastName; ?>">
  	</div>
	  <div class="input-group">
  	  <label>Telephone</label>
  	  <input type="tel" name="phone" value="<?php echo $telephone; ?>">
  	</div>
	  <div class="group">
  	  <label>Gender: </label> <br>
  	  <input type="radio" name="gender" value="male"> male <br>
  	  <input type="radio" name="gender" value="female"> female <br>

  
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	
  </form>
</body>
</html>