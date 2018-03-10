<?php
session_start();
$servername = "localhost";
$username = "";
$password = "";
$dbname = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "truncate table ".$_POST["delete"];
mysqli_query($conn, $sql);
header("Location: http://localhost/quiz/pages/admin.php");

mysqli_close($conn);
?>
