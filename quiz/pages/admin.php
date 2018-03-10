


<!DOCTYPE html>

<html>

<head>
    <title>Admin</title>
    <meta charset="ISO-8859-1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.8/jquery.validate.min.js"></script>
    <link href="http://localhost/quiz/css/admin.css" rel="stylesheet" type="text/css">
    <script src="js/admin.js" type="text/javascript"></script>
<style>
    #a{
        color:white;
    }
    #a:hover{
        color:#ff9999;
    }

</style>
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
                <a href="http://localhost/quiz/login.php" id="a"  >
                    <span class="glyphicon glyphicon-log-out" data-toggle="modal" data-target="#myLogin"></span>Logout
                </a>
            </li>
        </ul>
    </div>
</nav>


<h1 style="font-family:Bernard MT Condensed;color:#990000;text-align:center;" id="h1">Admin</h1>
<div id="quiz" class="container">
    <div id="quiz1">
        <form class="form-horizontal form" method=post id="form">
                <div class="form-group">
                    <input type="button" id="submit" class="btn btn-default" value="Generate Quiz" onClick="document.location.href='http://localhost/quiz/pages/admincreate.php'"></input>
                </div>
                <hr id="hr">
                <div class="form-group">
                    <div class="form-group">
                        <input type="button" id="submit" class="btn btn-default" value="Delete Quiz" onClick="document.location.href='http://localhost/quiz/pages/admindelete.php'"></input>
                    </div>
                </div>

        </form>
    </div>
</div>

</body>

</html>
