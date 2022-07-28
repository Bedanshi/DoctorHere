<?php
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$query = $_POST['query'];



// Database connection
$conn = new mysqli('localhost', 'root', '', 'test');
if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into yourquery( fullname, email, query) values(?, ?, ?)");
    $stmt->bind_param("sss", $fullname, $email, $query);
    $stmt->execute();
    echo $execval;
    header("Location: http://localhost:3000/index%20(1).html");
    $stmt->close();
    $conn->close();
}
