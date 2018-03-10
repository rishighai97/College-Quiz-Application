<?php
session_start();

$paper=$_SESSION["paper"];
$count=0;

for($i=1;$i<=10;$i++)
{
    if($_POST["$i"]==$_SESSION["'ans'.$i"])
    {
       $count++;
        //echo $_POST["$i"]."      ".$_SESSION["'ans'.$i"]."<br>";
    }
}

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

$sql="update quiz set ".$paper."=".$count." where roll=".$_SESSION["roll"];
$result = mysqli_query($conn, $sql);
mysqli_query($conn,$sql);
$_SESSION[$paper]=$count;
header("Location: http://localhost/quiz/pages/result.php");

?>