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
    die("No database connection");
}

$sql="select wp from quiz where roll=".$_SESSION["roll"];
$result=mysqli_query($conn,$sql);
$result_value = mysqli_fetch_object($result);
if($result_value->wp!="not attempted"){
    header("Location: http://localhost/quiz/pages/quiz.php");
    exit();
}

$sql = "SELECT * FROM wp";
$result = mysqli_query($conn, $sql);
session_start();
if (mysqli_num_rows($result) > 0) {
// output data of each row
    $count=1;
    while ($row = mysqli_fetch_assoc($result)) {
        $_SESSION["'q'.$count"] =$row["que"];
        $_SESSION["$count.'a'"] =$row["a"];
        $_SESSION["$count.'b'"] =$row["b"];
        $_SESSION["$count.'c'"] =$row["c"];
        $_SESSION["$count.'d'"] =$row["d"];
        $_SESSION["'ans'.$count"] =$row["ans"];
        $count++;
    }
    header("Location: http://localhost/quiz/pages/paper.php");
    //echo $_SESSION["'q'.9"],$_SESSION["5.'a'"],$_SESSION["5.'b'"],$_SESSION["5.'c'"],$_SESSION["5.'d'"];
}
else {

    header("Location: http://localhost/quiz/pages/quiz.php");
}
$_SESSION["paper"]="wp";
$_SESSION["title"]="Web programming";
?>