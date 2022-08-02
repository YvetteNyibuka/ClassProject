
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sancta maria SS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="sancta.css">
</head>
<body>


<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
<table style="width: 100%; height : 100%;border-collapse: collapse;align-items: center; text-align: center;" >
    <tr style="height: 30px; background-color: lightgrey;"><td colspan="9"><p style="font-size: 30px;color:blue; "><marquee behavior="sliding" direction="left" width="100%"> WELCOME TO ECOLE SECONDAIRE SANCTA MARIA KARAMBO </marquee></p>
    </td></tr>
    <tr style="height: 100px;">
        <td colspan="9" style="background-color: skyblue;">
            <header>
                <img src="images/scimage.png" alt="school logo" height="25%" width="12%">
                </header>
        </td>
    </tr>
<tr style="background-color: grey;">
    <td><a href="home.html">HOME</a></td>
    <td> <a href="abouts.html" >ABOUT</a></td>
    <td><a href="#HISTORY">HISTORY</a></td>
    <td><a href="#CONTACTS">CONTACTS</a></td>
   
    <td>

    <?php  if (isset($_SESSION['username'])) : ?>
    
    	<p> <a href="index.php?logout='1'" style="color: blue;">logout</a> </p>
    <?php endif ?>

    </td>
    <td> <a href="#"><i class="fa-brands fa-facebook" style="font-size: 30px;"></i></a>
    </td>
    <td><a href=""><i class="fa-brands fa-instagram-square" style="font-size: 30px;"></i></a> 
    </td>
    <td><a href=""><i class="fa-brands fa-linkedin" style="font-size: 30px;"></i></a>
    </td>
</tr>
<tr style="background-color: lightslategrey;">
    <td colspan="2"><img src="images/STUD.jfif" alt=""></td>
    <td colspan="4" style="font-family: cursive;"><h1>
    
    
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>

    <?php endif ?>
    
    
    ECOLE SECONDAIRE SANCTA MARIA KARAMBO</h1>
        <p> "All children start their school careers with sparkling imaginations, fertile minds, and a willingness to take risks with what they think". Our mixed secondary boarding school, the ES SANCTA MARIA KARAMBO of Science and Humanity, was founded to enable Rwanda’s young generation to reach their full potential, becoming the future scientists, entrepreneurs, advocates, and thought leaders that the world needs. These young generation will bring insights and solutions to the biggest global challenges we face.</p>
    </td>
    <td colspan="3"><img src="images/IMBUTO.jfif" alt=""></td>

</tr>

<tr style="background-color: beige;">
    <td colspan="3"><h3>Our school ranked first in MCE combination at the national level in academic year 2019 <br>
    <img src="images/BPG.jfif" alt=""></h3></td>
    <td colspan="6"><h1>Why study at ES SANCTA MARIA KARAMBO?</h1><br>
    <p><b>The students have access to courses, research facilities, and course mentors from all parts of the country. With world-renowned options, state-of-the-technology resources, and peaceful instruction, it's the perfect place to pursue your favorite and still-to-be-discovered academic interests.</b></p></td>
</tr>
<tr style="background-color: skyblue;">
    <td colspan="3"><h3>HeadTeacher</h3><br><img src="images/BONQUET.jpeg" alt=""height="250px" width="300px"></td>
    <td colspan="1"><h3>Dean Of Studies DoS</h3><img src="images/JULE.jpeg" alt=""height="250px" width="300px"></td>
    <td colspan="1"><h3>Dean Of Discipline</h3><img src="images/DRONE.jpeg" alt=""height="200px" width="300px"></td>
    <td colspan="4"><h3>Bursar/Accountant</h3><img src="images/AIME.jpeg" alt="" height="200px" width="300px"></td>
</tr>

<tr style="background-color: mediumpurple;">
    <td colspan="9"><i class="fa-solid fa-copyright"></i>2022  powered by Sancta Maria Karambo</td>
</tr>
</table>
</body>
</html>