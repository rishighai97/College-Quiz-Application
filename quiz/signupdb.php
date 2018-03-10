<?php
session_start();
$servername = "localhost";
$username = "";
$password = "";
$dbname = "test";

$fname=$_SESSION["fname"];
$mname=$_SESSION["mname"];
$lname=$_SESSION["lname"];

$roll=$_SESSION["roll"];
$email=$_SESSION["email"];
$pass=$_SESSION["password"];



// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



//Create table
	$sql = "CREATE TABLE IF NOT EXISTS quiz (
	roll int PRIMARY KEY,
    fname varchar(40),
	mname varchar(40),
    lname varchar(40),  
    email varchar(40),
    pass varchar(40),
    os varchar(40),
    ad varchar(40),
    oose varchar(40),
    itc varchar(40),
    cg varchar(40),
    wp varchar(40)
	)";	

mysqli_query($conn,$sql);


//Insert values
$sql = "INSERT INTO quiz (roll,fname,mname,lname,email,pass,os,ad,oose,itc,cg,wp)
VALUES($roll,'$fname','$mname','$lname','$email','$pass','not attempted','not attempted','not attempted','not attempted','not attempted','not attempted')";

if (mysqli_query($conn,$sql) === TRUE) {
        session_start();
        $_SESSION['fname'] = $fname;
        $_SESSION['mname'] = $mname;
        $_SESSION['lname'] = $lname;
        $_SESSION['email'] = $email;
        $_SESSION['roll'] = $roll;


    $sql = "SELECT roll FROM quiz WHERE email='$email' AND pass='$pass'";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
        $name="SELECT * FROM quiz WHERE email='$email' AND pass='$pass'";
        $result=mysqli_query($conn,$name);
        $result_value = mysqli_fetch_object($result);
        $_SESSION['os'] = $result_value->os;
        $_SESSION['ad'] = $result_value->ad;
        $_SESSION['oose'] = $result_value->oose;
        $_SESSION['itc'] = $result_value->itc;
        $_SESSION['cg'] = $result_value->cg;
        $_SESSION['wp'] = $result_value->cg;
    }

        header("Location: http://localhost/quiz/pages/profile.php");
} else {
    session_destroy();
    header("Location: http://localhost/quiz/signup.php");
}




mysqli_close($conn);
?>
