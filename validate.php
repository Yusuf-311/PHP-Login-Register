<?php
include("config.php");
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$username = $mysqli->real_escape_string($username);

$query = "SELECT username, password, role FROM users WHERE username = '$username' AND password='$password';";
$result = $mysqli->query($query);

if ($result->num_rows == 1) {
	$row = $result->fetch_assoc();
	$_SESSION['user'] = $username;

	// Cek role pengguna
	if ($row['role'] == 'admin') {
		header('Location: home.php'); // Admin redirect ke home.php
	} elseif ($row['role'] == 'user') {
		header('Location: homepage.html'); // User redirect ke homepage.php
	} else {
		// Jika peran tidak valid, mungkin Anda ingin menangani kasus ini secara khusus
		header('Location: login.html');
	}
} else {
	header('Location: login.html');
}
