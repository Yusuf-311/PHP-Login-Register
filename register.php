<?php
include("config.php");
include("session.php");

$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$birthdate = $_POST['birthdate'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = "user";

$sql = "INSERT INTO users(firstname, middlename, lastname, birthdate, username, password,role) 
VALUES('$firstname', '$middlename', '$lastname', '$birthdate', '$username', '$password','$role')";
if (mysqli_query($mysqli, $sql)) {
	echo '<script language="javascript">';
	echo 'alert("New user was added!");';
	echo 'window.location="index.php";';
	echo '</script>';
} else {
	echo '<script language="javascript">';
	echo 'alert("Duplicate user!");';
	echo 'window.location="registration.php";';
	echo '</script>';
}
