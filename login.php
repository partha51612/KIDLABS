<?php
include("connection.php");

$email = $_POST['email'];
$password = $_POST['password'];
$pass_new = sha1($password);

$result=mysqli_query( $conn, "SELECT password,email FROM registration WHERE email='$email' AND password='$pass_new' ")
 or die("Could not execute query: " .mysqli_error($conn));
$row = mysqli_fetch_assoc($result);
if(!$row) {
die("<script>alert('Invalid email or password')</script>".header('refresh:0;url=index.php'));
		}
else {
	header('refresh:0;url=view.php');
	}
?>
