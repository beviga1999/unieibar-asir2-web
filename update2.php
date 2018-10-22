<?php
//
$servername = "localhost";
$username = "root";
$password = "";
//$password = "";
$db = "web";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
// read from formulary
$user = $_POST["user"];
$password = $_POST["password"];
//echo $user;
// update user
$query = "UPDATE usuarios SET password = '$password' WHERE name = '$user'";
//echo $query;
$result = mysqli_query($conn, $query);
header('Location: '."login2.php");