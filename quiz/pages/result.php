<?php
session_start();
$os = $_SESSION["os"];
$ad = $_SESSION["ad"];
$oose = $_SESSION["oose"];
$itc = $_SESSION["itc"];
$cg = $_SESSION["cg"];
$wp = $_SESSION["wp"];
?>

<!DOCTYPE html>

<html>

<head>
    <title>Results</title>
        <meta charset="ISO-8859-1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <link href="/quiz/css/page.css" rel="stylesheet" type="text/css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="" type="text/javascript"></script>

<style>
    td{
        color:#990000;
    }
    #tableDiv{
        width:50%;
    }
    table{
        border-color:#990000;
        border-collapse: inherit;
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



   <!-- Heading -->
<h2>Result</h2> 



   <!-- Side-Navigation bar -->
<div id="mySidenav" class="sidenav">
  <a href="/quiz/pages/profile.php" id="a">
          <span class="glyphicon glyphicon-user">  Profile</span>
        </a>
  <a href="/quiz/pages/about.php" id="a">
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
  <a href="/quiz/pages/result.php" id="current">
          <span class="glyphicon glyphicon-ok">  Result</span>
        </a>   
</div>


<!-- body -->

    <div class="container div1" id="div1">
        <div class="container" id="tableDiv">
        <table class="table table-hover"   border="1">
            <tr>
                <th style="background-color:#990000;color:white;" colspan="2">   IA result</center></th>


            </tr>
            <tr>
                <th>Operating Systems </th>
                <td><?php echo $os;?></td>
            </tr>

            <tr>
                <th>Advanced Databases</th>
                <td><?php echo $ad;?></td>
            </tr>

            <tr>
                <th>Software engineering</th>
                <td><?php echo $oose;?></td>
            </tr>

            <tr>
                <th>Information Theory and coding</th>
                <td><?php echo $itc;?></td>
            </tr>

            <tr>
                <th>Computer graphics</th>
                <td><?php echo $cg;?></td>
            </tr>
            <tr>
                <th>Web programming II</th>
                <td><?php echo $wp;?></td>
            </tr>


        </table>
        </div>

</div>

</body>
</html>
