<?php
$Fullname = $_POST['Fullname'];
$email = $_POST['email'];
$password = $_POST['password'];
$Address = $_POST['Address'];
$phnnumber = $_POST['phnnumber'];


// Database connection
$conn = new mysqli('localhost', 'root', '', 'test');
if ($conn->connect_error) {
	echo "$conn->connect_error";
	die("Connection Failed : " . $conn->connect_error);
} else {
	$stmt = $conn->prepare("insert into registration( Fullname, email, password, Address, phnnumber) values( ?, ?, ?, ?, ?)");
	$stmt->bind_param("ssssi", $Fullname, $email, $password, $Address, $phnnumber);
	$stmt->execute();
	echo $execval;
	echo "Registration successfully...";
	header("Location: http://localhost:3000/index%20(1).html");
	$stmt->close();
	$conn->close();
}
