<?php
require_once "../config/config.php";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$sended = $_SESSION['sended'];
$sended = "Thank You For Contacting Us . Your Message Has Been Send .";

$query = "INSERT INTO contacts (fname,lname,email,subject,message) 
					  VALUES('$fname', '$lname', '$email','$subject','$message')";
mysqli_query($link, $query);

$_SESSION['sended'] = $sended;
header('location: ../#Contact_Us');
