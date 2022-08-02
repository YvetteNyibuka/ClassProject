<?php
session_start();

// initializing variables
$firstName = "";
$lastName = "";
$telephone = "";
$stdentno = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'school');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $firstName = mysqli_real_escape_string($db, $_POST['firstName']);
  $lastName = mysqli_real_escape_string($db, $_POST['lastName']);
  $telephone = mysqli_real_escape_string($db, $_POST['phone']);
  // $gender = mysqli_real_escape_string($db, $_POST['gender']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($firstName)) { array_push($errors, "first Name is required"); }
  if (empty($lastName)) { array_push($errors, "last Name is required"); }
  if (empty($telephone)) { array_push($errors, "telephone is required"); }
  if (empty($stdentno)) { array_push($errors, "student id is required"); }
}

  	$query = "INSERT INTO parent (firstName, lastName, telephone, std_id) 
  			  VALUES('$firstName', '$lastName',  '$telephone', '$stdentno')";

  ?>