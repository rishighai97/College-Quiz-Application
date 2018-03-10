<?php 
session_start();

?>
<!DOCTYPE html>



<head>
    <title>Login</title>
    <meta charset="ISO-8859-1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.8/jquery.validate.min.js"></script>
    <link href="css/login.css" rel="stylesheet" type="text/css">


</head>

<body id="body">

<!-- validation -->


<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') { //form is submitted

$_SESSION["email"]=$_POST["email"];
$_SESSION["password"]=$_POST["password"];
    //validate the submitted data
    //submit the query

    if(empty($_POST["email"])){
 	   $_SESSION["e1"]="Enter email ID";
	   $_SESSION["c1"]=0;
	}
    else{
    	   $_SESSION["e1"]="";	
    	    $_SESSION["c1"]=1;	
        }

    if(empty($_POST["password"])){
	   $_SESSION["e2"]="Enter password";
	   $_SESSION["c2"]=0;  
	}
    else{
 	    	
	   $_SESSION["e2"]="";
            $_SESSION["c2"]=1;  
	
    }



}
else{
$_SESSION["e1"]="";
$_SESSION["e2"]="";
$_SESSION["email"]="";
$_SESSION["password"]="";
$_SESSION["c1"]=0;
$_SESSION["c2"]=0;
}


if($_SESSION["c1"]==1 && $_SESSION["c2"]==1){
header("Location: http://localhost/quiz/logindb.php");
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
                        <a href="signup.php" id="a" >
                            <span class="glyphicon glyphicon-user" data-toggle="modal" data-target="#myLogin"></span>Sign Up
                        </a>
                    </li>
                </ul>
            </div>
    </nav>

<h1 style="font-family:Bernard MT Condensed;color:#990000;text-align:center;" id="h1">Login</h1>
<!-- Login page -->
<div id="login" class="container">
    <div id="login1">
        <form class="form-horizontal form" method=post id="form" action="login.php">
            <div class="form-group">
                <label style="margin-top:5%;">Email: *</label>
                <input type="text" id="input" name="email" class="form-control email" placeholder="Email ID" value="<?php echo $_SESSION["email"];?>">
                <span class="error"> <?php echo $_SESSION["e1"]; ?></span>
            </div>

            <div class="form-group">
                <label>Password: *</label>
                <input type ="password" id="input" name="password" class="form-control password" placeholder="Password" value="<?php echo $_SESSION["password"];?>">
                <span class="error"> <?php echo $_SESSION["e2"];?></span>
                <br>
                <button type="submit" class="btn btn-primary form-control input2" name="submit" id="submit" style="background-color: #990000;color:white;font-size:18px;">Login</button><br>
               
            </div>


        </form>
    </div>
</div>






</body>

</html>





