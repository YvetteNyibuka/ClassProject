<?php
include('config.php');
 if(isset($_POST['ret_info'])){
    $query = "SELECT * FROM student";
    $re = mysqli_query($con, $query);
    if($re){
		echo"THE LIST OF STUDENTS FROM DATABE SCHOOL";
        while($row = mysqli_fetch_array($re)){
            echo    "<br/>"."<br/>".$row["id"]. " ".$row['firstName']. " ".$row['lastName']." ".$row['age']." ".$row['gender']." ".$row['username']." ".$row['password']."".$row['created_at']. " "."<a>Edit</a>|"." "."<a>Delete</a>|"."<br/>";
        }
    }
    echo "";
 }


?>

<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Sancta Maria Karambo student form </title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color:lightblue">
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>firstName</label>
  	  <input type="text" name="firstName" value="<?php echo $firstName; ?>">
  	</div>
	  <div class="input-group">
  	  <label>lastName</label>
  	  <input type="text" name="lastName" value="<?php echo $lastName; ?>">
  	</div>
	  <div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
	  <div class="input-group">
  	  <label>Age</label>
  	  <input type="text" name="age" value="<?php echo $age; ?>">
  	</div>
	  <div class="group">
  	  <label>Gender: </label> <br>
  	  <input type="radio" name="gender" value="male"> male <br>
  	  <input type="radio" name="gender" value="female"> female <br>

  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
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
  	  <button type="submit" class="btn" name="reg_user">Register</button>

  	  <button type="submit" class="btn" name="ret_info">Retrieve</button>
  	</div>
  	<p>
  		Already have account? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>