<?php
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



//Create table
	$sql = "CREATE TABLE IF NOT EXISTS ".$_POST['paper']."(
	que varchar(50),
    a varchar(50),
    b varchar(50),
    c varchar(50),
    d varchar(50),
    ans varchar(50)
	)";


mysqli_query($conn,$sql);

$q1=$_POST["q1"];
$a1=$_POST["1a"];
$b1=$_POST["1b"];
$c1=$_POST["1c"];
$d1=$_POST["1d"];
$ans1=$_POST["ans1"];
$sql="
		INSERT INTO ".$_POST['paper']."(que,a,b,c,d,ans) VALUES('$q1','$a1','$b1','$c1','$d1','$ans1');
	";
$insert=mysqli_query($conn,$sql);


$q2=$_POST["q2"];
$a2=$_POST["2a"];
$b2=$_POST["2b"];
$c2=$_POST["2c"];
$d2=$_POST["2d"];
$ans2=$_POST["ans2"];
$sql="
		INSERT INTO ".$_POST['paper']."(que,a,b,c,d,ans) VALUES('$q2','$a2','$b2','$c2','$d2','$ans2');
	";
$insert=mysqli_query($conn,$sql);


$q3=$_POST["q3"];
$a3=$_POST["3a"];
$b3=$_POST["3b"];
$c3=$_POST["3c"];
$d3=$_POST["3d"];
$ans3=$_POST["ans3"];
$sql="
		INSERT INTO ".$_POST['paper']."(que,a,b,c,d,ans) VALUES('$q3','$a3','$b3','$c3','$d3','$ans3');
	";
$insert=mysqli_query($conn,$sql);


$q4=$_POST["q4"];
$a4=$_POST["4a"];
$b4=$_POST["4b"];
$c4=$_POST["4c"];
$d4=$_POST["4d"];
$ans4=$_POST["ans4"];
$sql="
		INSERT INTO ".$_POST['paper']."(que,a,b,c,d,ans) VALUES('$q4','$a4','$b4','$c4','$d4','$ans4');
	";
$insert=mysqli_query($conn,$sql);


$q5=$_POST["q5"];
$a5=$_POST["5a"];
$b5=$_POST["5b"];
$c5=$_POST["5c"];
$d5=$_POST["5d"];
$ans5=$_POST["ans5"];
$sql="
		INSERT INTO ".$_POST['paper']."(que,a,b,c,d,ans) VALUES('$q5','$a5','$b5','$c5','$d5','$ans5');
	";
$insert=mysqli_query($conn,$sql);


$q6=$_POST["q6"];
$a6=$_POST["6a"];
$b6=$_POST["6b"];
$c6=$_POST["6c"];
$d6=$_POST["6d"];
$ans6=$_POST["ans6"];
$sql="
		INSERT INTO ".$_POST['paper']."(que,a,b,c,d,ans) VALUES('$q6','$a6','$b6','$c6','$d6','$ans6');
	";
$insert=mysqli_query($conn,$sql);


$q7=$_POST["q7"];
$a7=$_POST["7a"];
$b7=$_POST["7b"];
$c7=$_POST["7c"];
$d7=$_POST["7d"];
$ans7=$_POST["ans7"];
$sql="
		INSERT INTO ".$_POST['paper']."(que,a,b,c,d,ans) VALUES('$q7','$a7','$b7','$c7','$d7','$ans7');
	";
$insert=mysqli_query($conn,$sql);


$q8=$_POST["q8"];
$a8=$_POST["8a"];
$b8=$_POST["8b"];
$c8=$_POST["8c"];
$d8=$_POST["8d"];
$ans8=$_POST["ans8"];
$sql="
		INSERT INTO ".$_POST['paper']."(que,a,b,c,d,ans) VALUES('$q8','$a8','$b8','$c8','$d8','$ans8');
	";
$insert=mysqli_query($conn,$sql);


$q9=$_POST["q9"];
$a9=$_POST["9a"];
$b9=$_POST["9b"];
$c9=$_POST["9c"];
$d9=$_POST["9d"];
$ans9=$_POST["ans9"];
$sql="
		INSERT INTO ".$_POST['paper']."(que,a,b,c,d,ans) VALUES('$q9','$a9','$b9','$c9','$d9','$ans9');
	";
$insert=mysqli_query($conn,$sql);


$q10=$_POST["q10"];
$a10=$_POST["10a"];
$b10=$_POST["10b"];
$c10=$_POST["10c"];
$d10=$_POST["10d"];
$ans10=$_POST["ans10"];
$sql="
		INSERT INTO ".$_POST['paper']."(que,a,b,c,d,ans) VALUES('$q10','$a10','$b10','$c10','$d10','$ans10');
	";
$insert=mysqli_query($conn,$sql);
header("Location: http://localhost/quiz/pages/admin.php");


mysqli_close($conn);
?>

