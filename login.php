<?php
$email = $_POST['email'];
$password = $_POST['password'];



// Database connection
$conn = new mysqli('localhost', 'root', '', 'test');
if ($conn->connect_error) {
	echo "$conn->connect_error";
	die("Connection Failed : " . $conn->connect_error);
} else {
	$stmt = $conn->prepare("insert into login(  email, password) values( ?, ?)");
	$stmt->bind_param("ss",  $email, $password);
	$execval = $stmt->execute();
	echo $execval;

	header("Location: http://localhost:3000/index%20(1).html");
	$stmt->close();
	$conn->close();
}
