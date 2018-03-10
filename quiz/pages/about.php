<?php
session_start();
$fname = $_SESSION["fname"];
$mname = $_SESSION["mname"];
$lname = $_SESSION["lname"];
$email = $_SESSION["email"];
$roll = $_SESSION["roll"];
?>

<!DOCTYPE html>

<html>

<head>
    <title>About us</title>
        <meta charset="ISO-8859-1">
        	<meta http-equiv="Cache-control" content="no-cache">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <link href="/quiz/css/page.css" rel="stylesheet" type="text/css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="" type="text/javascript"></script>


<style>
	
#li1{ 
    border-color:#990000;
    background-color:#990000;
    width:95%;
    border-radius:10px;
    text-align:center;
    font-size:18px;
    font-family:Copperplate Gothic Bold;
}


</style>

</head>



<body id="body">

    <!-- Navigation bar -->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#" style="color:white;" id="a1">Somaiya inpods</a>
            </div>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="http://localhost/quiz/logout.php" id="a" >
                            <span class="glyphicon glyphicon-log-out"></span> Logout
                        </a>
                    </li>
                </ul>
            </div>
    </nav>



<h2>About IA quiz</h2> 


<div id="mySidenav" class="sidenav">
  <a href="/quiz/pages/profile.php" id="a">
          <span class="glyphicon glyphicon-user">  Profile</span>
        </a>
  <a href="/quiz/pages/about.php" id="current">
          <span class="glyphicon glyphicon-info-sign"> About IA</span>
        </a>
  <a href="/quiz/pages/calendar.php" id="a">
          <span class="glyphicon glyphicon-calendar">  Calendar</span>
        </a>
 
  <a href="/quiz/pages/courses.php" id="a">
          <span class="glyphicon glyphicon-book">  Courses</span>
        </a>    
  <a href="/quiz/pages/quiz.php" id="a">
          <span class="glyphicon glyphicon-question-sign">  Quiz</span>
        </a>   
  <a href="/quiz/pages/result.php" id="a">
          <span class="glyphicon glyphicon-ok">  Result</span>
        </a>   
</div>




<div class="container div1" id="div1">
                    <div class="item">
                        <ul id="ul1" type=disc>
                        <br>
                            <li id="li1" class="list-group-item active">For each subject one/two IA quiz will be conducted.</li>
                            <br>
                            <li id="li1" class="list-group-item active">The IA quiz is of 10 marks.</li>
                            <br>
                            <li id="li1" class="list-group-item active">The result of the IA quiz can be viewed on the website.</li>
                            <br>
                            <li id="li1" class="list-group-item active">The average of two IA quiz will be added to your total IA marks.</li>
                            <br>
                            <li id="li1" class="list-group-item active">Once the student starts the quiz, he/she can attempt it for 5 minutes only.</li>
                            <br>
                            <li id="li1" class="list-group-item active">If the student fails to submit, he/she will be given 0 in that quiz.</li>
                            <br>
                            <li id="li1" class="list-group-item active">The IA quiz will have 4 options for every question.</li>
                        </ul>
                        <div class="carousel-caption"></div>
                    </div>
</div>

</body>
</html>
