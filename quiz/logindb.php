<?php
session_start();
$servername = "localhost";
$username = "";
$password = "";
$dbname = "test";

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


if($email=='admin@somaiya.edu' && $pass=='admin123') {
    header("Location: http://localhost/quiz/pages/admin.php");
    exit();
}


    mysqli_query($conn, $sql);

    $sql = "SELECT roll FROM quiz WHERE email='$email' AND pass='$pass'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {

            session_start();

            $name = "SELECT * FROM quiz WHERE email='$email' AND pass='$pass'";
            $result = mysqli_query($conn, $name);
            $result_value = mysqli_fetch_object($result);
            $_SESSION['fname'] = $result_value->fname;
            $_SESSION['mname'] = $result_value->mname;
            $_SESSION['lname'] = $result_value->lname;
            $_SESSION['email'] = $result_value->email;
            $_SESSION['roll'] = $result_value->roll;
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
        header("Location: http://localhost/quiz/login.php");
    }



mysqli_close($conn);
?>
