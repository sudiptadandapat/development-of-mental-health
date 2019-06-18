<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$sex = "";
$contact = "";
$city = "";
$address = "";
$institute = "";
$department="";
$f1name = "";
$f1email = "";
$f1contact = "";
$f2name = "";
$f2email = "";
$f2contact = "";
$f3name = "";
$f3email = "";
$f3contact = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $sex = mysqli_real_escape_string($db, $_POST['sex']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $cpassword = mysqli_real_escape_string($db, $_POST['cpassword']);
    $contact = mysqli_real_escape_string($db, $_POST['contact']);
    $city = mysqli_real_escape_string($db, $_POST['city']);
    $address = mysqli_real_escape_string($db, $_POST['address']);
    $institute = mysqli_real_escape_string($db, $_POST['institute']);
     $department = mysqli_real_escape_string($db, $_POST['department']);
    $f1name = mysqli_real_escape_string($db, $_POST['f1name']);
    $f1email = mysqli_real_escape_string($db, $_POST['f1email']);
    $f1contact = mysqli_real_escape_string($db, $_POST['f1contact']);
    $f2name = mysqli_real_escape_string($db, $_POST['f2name']);
    $f2email = mysqli_real_escape_string($db, $_POST['f2email']);
    $f2contact = mysqli_real_escape_string($db, $_POST['f2contact']);
    $f3name = mysqli_real_escape_string($db, $_POST['f3name']);
    $f3email = mysqli_real_escape_string($db, $_POST['f3email']);
    $f3contact = mysqli_real_escape_string($db, $_POST['f3contact']);
    
    
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($sex)) { array_push($errors, "Sex is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
    if ($password != $cpassword) {
	array_push($errors, "The two passwords do not match");
  }
    
    if (empty($contact)) { array_push($errors, "contact is required"); }
    if (empty($city)) { array_push($errors, "city is required"); }
    if (empty($address)) { array_push($errors, "address is required"); }
    if (empty($institute)) { array_push($errors, "institute is required"); }
    if (empty($department)) { array_push($errors, "department is required"); }
    if (empty($f1name)) { array_push($errors, "f1name is required"); }
    if (empty($f1email)) { array_push($errors, "f1email is required"); }
    if (empty($f1contact)) { array_push($errors, "f1contact is required"); }
    if (empty($f2name)) { array_push($errors, "f2name is required"); }
    if (empty($f2email)) { array_push($errors, "f2email is required"); }
    if (empty($f2contact)) { array_push($errors, "f2contact is required"); }
    if (empty($f3name)) { array_push($errors, "f3name is required"); }
    if (empty($f3email)) { array_push($errors, "f3email is required"); }
    if (empty($f3contact)) { array_push($errors, "f3contact is required"); }
    if (empty($f3contact)) { array_push($errors, "f3contact is required"); }
  

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO user (username,  password, email,contact,sex,city,address,institute ,department,f1name,f1email,f1contact,f2name,f2email,f2contact,f3name,f3email,f3contact) 
  			  VALUES('$username', '$password' ,'$email','$contact' ,'$sex','$city','$address','$institute','$department','$f1name','$f1email','$f1contact','$f2name','$f2email','$f2contact','$f3name','$f3email','$f3contact')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index1.php');
  }
  
}
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: quiz.html');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>