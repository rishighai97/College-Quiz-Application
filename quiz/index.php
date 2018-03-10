<?php

?>

<!DOCTYPE html>

<html>

<head>
    <title>Somaiya Inpods</title>
        <meta charset="ISO-8859-1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <link href="css/index.css" rel="stylesheet" type="text/css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/index.js" type="text/javascript"></script>
</head>



<body id="body">

    <!-- Navigation bar -->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#" style="color:white;" id="a">Somaiya inpods</a>
            </div>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="signup.php" id="a" >
                            <span class="glyphicon glyphicon-user" data-toggle="modal" data-target="#mySignUp"></span>Sign Up
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
	



        <!-- Image and features -->
        <div class="container_img">
            <h1 style="font-family:Bernard MT Condensed;color:#990000;text-align:center;" id="h41">Welcome to Somaiya Inpods</h1>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                   
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="images/somaiya.jpg"  alt="Los Angeles" id="img" ">
                        <div class="carousel-caption">
                        </div>
                    </div>
                    <div class="item" id="rect">
                        <h2 style="color:#990000;font-family:Franklin Gothic Demi;margin-left:4%;">Features of website</h2>
                        <ul id="ul1" type=disc>
                            <li id="li1" class="list-group-item active">Somaiya inpods is a website associated with KJ Somaiya College of engineering to conduct the IA quiz.</li>
                            <br>
                            <li id="li1" class="list-group-item active">It has a user friendly interface.</li>
                            <br>
                            <li id="li1" class="list-group-item active">It is a common platform to give all the IA quiz.</li>
                            <br>
                            <li id="li1" class="list-group-item active">The students will be kept updated about the upcoming quiz on the website</li>
                            <br>
                            <li id="li1" class="list-group-item active">The students can also see the overall IA reult on the website</li>
                            <br>
                            <li id="li1" class="list-group-item active">Teachers can upload study material that can be viewed and downloaded by the students</li>
                            <br>
                            <li id="li1" class="list-group-item active">The portion,dates for the quiz will be updated on the website</li>
                        </ul>
                        <div class="carousel-caption"></div>
                    </div>
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

</body>

</html>
