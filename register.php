<?php
session_start();
include "db.php";
if (isset($_POST["f_name"])) {

	$f_name = $_POST["f_name"];
	$l_name = $_POST["l_name"];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$repassword = $_POST['repassword'];
	$mobile = $_POST['mobile'];
	$address1 = $_POST['address1'];
	$address2 = $_POST['address2'];
	$name = "/^[a-zA-Z ]+$/";
	$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
	$number = "/^[0-9]+$/";

if(empty($f_name) || empty($l_name) || empty($email) || empty($password) || empty($repassword) ||
	empty($mobile) || empty($address1) || empty($address2)){
		
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>PLease Fill all fields..!</b>
			</div>
		";
		exit();
	} else {
		if(!preg_match($name,$f_name)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>this $f_name is not valid..!</b>
			</div>
		";
		exit();
	}
	if(!preg_match($name,$l_name)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>this $l_name is not valid..!</b>
			</div>
		";
		exit();
	}
	if(!preg_match($emailValidation,$email)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>this $email is not valid..!</b>
			</div>
		";
		exit();
	}
	if(strlen($password) < 9 ){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Password is weak</b>
			</div>
		";
		exit();
	}
	if(strlen($repassword) < 9 ){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Password is weak</b>
			</div>
		";
		exit();
	}
	if($password != $repassword){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>password is not same</b>
			</div>
		";
	}
	if(!preg_match($number,$mobile)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Mobile number $mobile is not valid</b>
			</div>
		";
		exit();
	}
	if(!(strlen($mobile) == 10)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Mobile number must be 10 digit</b>
			</div>
		";
		exit();
	}
	//existing email address in our database
	$sql = "SELECT user_id FROM user_info WHERE email = '$email' LIMIT 1" ;
	$check_query = mysqli_query($con,$sql);
	$count_email = mysqli_num_rows($check_query);
	if($count_email > 0){
		echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Email Address is already available Try Another email address</b>
			</div>
		";
		exit();
	} else {
		$password = md5($password);
		$sql = "INSERT INTO `user_info` 
		(`user_id`, `first_name`, `last_name`, `email`, 
		`password`, `mobile`, `address1`, `address2`) 
		VALUES (NULL, '$f_name', '$l_name', '$email', 
		'$password', '$mobile', '$address1', '$address2')";
		$run_query = mysqli_query($con,$sql);
		$_SESSION["uid"] = mysqli_insert_id($con);
		$_SESSION["name"] = $f_name;
		$ip_add = getenv("REMOTE_ADDR");
		$sql = "UPDATE cart SET user_id = '$_SESSION[uid]' WHERE ip_add='$ip_add' AND user_id = -1";
		if(mysqli_query($con,$sql)){
			echo "register_success";
			exit();
		}
	}
	}
	
}



?>






<!-- END of Register page -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3>Using CSS to style an HTML Form</h3>

<div>
  <form action="/action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>
  
    <input type="submit" value="Submit">
  </form>
</div>



</body>
</html>