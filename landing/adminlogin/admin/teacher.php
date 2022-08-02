

<?php
include('config.php');
 if(isset($_POST['ret-info'])){
    $query = "SELECT * FROM teacher";
    $re = mysqli_query($con, $query);
    if($re){
		echo"THE LIST OF TEACHERS FROM DATABASE SCHOOL";
        while($row = mysqli_fetch_array($re)){
            echo   "<br/>"."<br/>".$row["id"]. " ".$row['firstName']. " ".$row['lastName']." ".$row['phone']." ".$row['email']." ".$row['userName']." ".$row['password']." "."<a>Edit</a>|"." "."<a>Delete</a>|"."<br/>";
        }
    }
    echo "";
 }


?>
<?php include('server2.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Sancta Maria Karambo Teacher form </title>
  <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body style="background-color:lightblue">
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="teacher.php">
  	<?php include('errors2.php'); ?>
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
  
  	  <button type="submit" class="btn" name="ret-info">Retrieve</button>
  	</div>
  	<p>
  		Already have account? <a href="login.php">SignIn</a>
  	</p>
  </form>
</body>
</html>