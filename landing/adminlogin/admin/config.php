<?php


$server = "localhost";
$user = "root";
$pass = "";
$db = "school";


$con = mysqli_connect($server, $user, $pass, $db);

if($con){
    echo " ";
    
}
else{
    echo " " .mysqli_connect($con);
}

?>