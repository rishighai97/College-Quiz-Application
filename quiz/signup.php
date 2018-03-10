<?php 
session_start();

?>


<!DOCTYPE html>

<html>

<head>
    <title>SignUp</title>
    <meta charset="ISO-8859-1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.8/jquery.validate.min.js"></script>
    <link href="css/signup.css" rel="stylesheet" type="text/css">

</head>



<body id="body">

<!-- validation -->

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') { //form is submitted

$_SESSION["fname"]=$_POST["fname"];
$_SESSION["mname"]=$_POST["mname"];
$_SESSION["lname"]=$_POST["lname"];
$_SESSION["roll"]=$_POST["roll"];
$_SESSION["email"]=$_POST["email"];
$_SESSION["password"]=$_POST["password"];
$_SESSION["retype_password"]=$_POST["retype_password"];

	if(!preg_match("/^[a-zA-Z]{1,30}$/",$_POST["fname"]))
	{
    	$_SESSION["e1"]="Enter first name(only letters)";
		$_SESSION["c1"]=0;
	}
	else
	{

     	$_SESSION["e1"]="";	
     	$_SESSION["c1"]=1;
	}


	if(!preg_match("/^[a-zA-Z]{1,30}$/",$_POST["mname"]))
	{
   		$_SESSION["e2"]="Enter middle name(only letters)";
		$_SESSION["c2"]=0;
	}
	else
	{
     	$_SESSION["e2"]="";	
     	$_SESSION["c2"]=1;
	}


	if(!preg_match("/^[a-zA-Z]{1,30}$/",$_POST["lname"]))
	{
    	$_SESSION["e3"]="Enter last name(only letters)";
		$_SESSION["c3"]=0;
	}
	else
	{	
     	$_SESSION["e3"]="";	
     	$_SESSION["c3"]=1;
	}


	if(!preg_match("/^[0-9]{7}$/",$_POST["roll"]))
	{
    	$_SESSION["e4"]="Enter your 7 digit roll number";
		$_SESSION["c4"]=0;
	}
	else
	{
        $_SESSION["e4"]="";	
        $_SESSION["c4"]=1;
	}


   if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/",$_POST["email"]))
   {
       $_SESSION["e5"] = "Enter email ID (abc@somaiya.edu)";
       $_SESSION["c5"]=0;
   }
   else{
       $_SESSION["e5"]="";
       $_SESSION["c5"]=1;
   }


   if(!preg_match("/^[0-9A-Za-z!@#$%]{1,12}$/",$_POST["password"]))
   {
     $_SESSION["e6"] = "Enter the password";
     $_SESSION["c6"]=0;
   }
   else{
       $_SESSION["e6"]="";
       $_SESSION["c6"]=1;
   }

   if($_SESSION["password"]!= $_SESSION["retype_password"])
   {
       $_SESSION["e7"] = "Passwords not matching";
       $_SESSION["c7"]=0;
   }
   else{
      $_SESSION["e7"]="";
      $_SESSION["c7"]=1;
   }

}
else{
$_SESSION["fname"]="";
$_SESSION["mname"]="";
$_SESSION["lname"]="";
$_SESSION["roll"]="";
$_SESSION["email"]="";
$_SESSION["password"]="";
$_SESSION["retype_password"]="";

$_SESSION["e1"]="";
$_SESSION["e2"]="";
$_SESSION["e3"]="";
$_SESSION["e4"]="";
$_SESSION["e5"]="";
$_SESSION["e6"]="";
$_SESSION["e7"]="";

$_SESSION["c1"]=0;
$_SESSION["c2"]=0;
$_SESSION["c3"]=0;
$_SESSION["c4"]=0;
$_SESSION["c5"]=0;
$_SESSION["c6"]=0;
$_SESSION["c7"]=0;
}


if($_SESSION["c1"]==1 && $_SESSION["c2"]==1 && $_SESSION["c3"]==1 && $_SESSION["c4"]==1 && $_SESSION["c5"]==1 && $_SESSION["c6"]==1 && $_SESSION["c7"]==1){
header("Location: http://localhost/quiz/signupdb.php");
}



?>

    <!-- Navigation bar -->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#" style="color:white;" id="a">Somaiya inpods</a>
            </div>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php" id="a" >
                            <span class="glyphicon glyphicon-home" data-toggle="modal" data-target="#mySignUp"></span>Home
                        </a>
                    </li>
                    <li>
                        <a href="login.php" id="a" >
                            <span class="glyphicon glyphicon-log-in" data-toggle="modal" data-target="#myLogin"></span>Login
                        </a>
                    </li>
                </ul>
            </div>
    </nav>
	

<h1 style="font-family:Bernard MT Condensed;color:#990000;text-align:center;" id="h1">Signup</h1>
<div id="signup" class="container">
    <div id="signup1">
        <form class="form-horizontal form" method=post id="form" action="signup.php">

            <div class="form-group">
                <h4>Student details</h4><br>
                <label>Name: *</label>
                <input id="input" name="fname" type="text" class="form-control" placeholder="Enter first name" value="<?php echo $_SESSION["fname"];?>">
                <span class="error"> <?php echo $_SESSION["e1"]; ?></span>
                <input id="input" name="mname" type="text" class="form-control" placeholder="Enter middle name" value="<?php echo $_SESSION["mname"]?>">
                <span class="error"> <?php echo $_SESSION["e2"]; ?></span>
                <input id="input"  name="lname" type="text" class="form-control" placeholder="Enter last name" value="<?php echo $_SESSION["lname"];?>">
                <span class="error"> <?php echo $_SESSION["e3"]; ?></span>
            </div>

            <div class="form-group">
                <label>Roll number:</label>
                <input type="number" class="form-control" id="input"  placeholder="Enter roll number" name="roll" value="<?php echo $_SESSION["roll"];?>">
                <span class="error"> <?php echo $_SESSION["e4"]; ?></span>
            </div>

            <hr id="hr" color="#990000">

            <div class="form-group">
                <h4>Login credentials</h4><br>
                <label>Email:</label>
                <input type="text" class="form-control" id="input"  placeholder="Enter email id" name="email" value="<?php echo $_SESSION["email"];?>">
                <span class="error"> <?php echo $_SESSION["e5"]; ?></span>
            </div>
            <div class="form-group">
                <label>Password:</label>
                <input type="password" class="form-control" id="input"  placeholder="Enter password" name="password" value="<?php echo $_SESSION["password"];?>">
                <span class="error"> <?php echo $_SESSION["e6"]; ?></span>
            </div>
            <div class="form-group">
                <label>Retype password:</label>
                <input type="password" class="form-control" id="input"  placeholder="Retype password" name="retype_password" value="<?php echo $_SESSION["retype_password"];?>">
                <span class="error"> <?php echo $_SESSION["e7"]; ?></span>
            </div>

            <hr id="hr">

            <div class="form-group">
                <button type="submit" id="submit" class="btn btn-default">Sign up</button>
            </div>
        </form>
    </div>
</div>

</body>

</html>
