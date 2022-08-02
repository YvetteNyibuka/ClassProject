
<?php
include('config.php');
 if(isset($_POST['ret-info'])){
    $query = "SELECT * FROM parent";
    $re = mysqli_query($con, $query);
    if($re){
		echo"THE LIST OF PARENTS FROM DATABASE SCHOOL";
        while($row = mysqli_fetch_array($re)){
            echo   "<br/>"."<br/>".$row["id"]. " ".$row['firstName']. " ".$row['lastName']." ".$row['telephone']." ".$row['std_id']." ".$row['created_at']." "."<a>Edit</a>|"." "."<a>Delete</a>|"."<br/>";
        }
    }
    echo "";
}
?>
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
	  </div>
	  <div class="input-group">
  	  <label>studeNo</label>
  	  <input type="tel" name="phone" value="<?php echo $stdentno; ?>">
  	</div>
	  
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">  addParent </button>
	  <button type="submit" class="btn" name="ret_info">  Retrieve Parents </button>

	</div>
  	
  </form>
</body>
</html>