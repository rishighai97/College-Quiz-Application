


<!DOCTYPE html>

<html>

<head>
    <title>Admin</title>
        <meta charset="ISO-8859-1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
            <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.8/jquery.validate.min.js"></script>
            <link href="http://localhost/quiz/css/admin.css" rel="stylesheet" type="text/css">

    <style>
        #a{
            color:white;
        }
        #a:hover{
            color:#ff9999;
        }
        #submit
        {
            background-color:#990000;
            width:30%;
            color:white;
            margin-left:35%;
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
                <a href="http://localhost/quiz/pages/admin.php" id="a" >
                    <span class="glyphicon glyphicon-home" data-toggle="modal" data-target="#mySignUp"></span>Admin
                </a>
            </li>
        </ul>
    </div>
</nav>
                  
<h1 style="font-family:Bernard MT Condensed;color:#990000;text-align:center;" id="h1">Generate Quiz</h1>
<div id="quiz" class="container">
            <div id="quiz1">
                        <form class="form-horizontal form" method=post id="form" action="admincreatedb.php">
                                     Paper code</label><br>
                                    <input name="paper" id="paper" ><br><br>
                                    
                                    <h4>Questions</h4><br>
                                    <div class="form-group">
                                                 
                                             <label> Q.1</label>
                                                 <input name="q1" id="question" ><br><br>
                                         Option A:
                                                 <input id="option" name="1a" ><br>
                                         Option B:
                                                 <input id="option" name="1b" ><br>
                                         Option C: 
                                                 <input id="option" name="1c" ><br>
                                         Option D: 
                                                 <input id="option" name="1d" ><br><br>
                                         Answer :
                                                 <input id="answer" name="ans1">
                                    </div>
                                    
                                    <hr id="hr">



                                    <div class="form-group">
                                                 
                                                 <label>  Q.2</label>
                                                 <input name="q2" id="question" ><br><br>
                                         Option A:
                                                 <input id="option" name="2a" ><br>
                                         Option B:
                                                 <input id="option" name="2b" ><br>
                                         Option C: 
                                                 <input id="option" name="2c" ><br>
                                         Option D: 
                                                 <input id="option" name="2d" ><br><br>
                                          Answer :
                                                 <input id="answer" name="ans2">
                                    </div>
                                    
                                    <hr id="hr">



                                    <div class="form-group">
                                                 
                                                <label>   Q.3</label>
                                                 <input name="q3" id="question" ><br><br>
                                         Option A:
                                                 <input id="option" name="3a" ><br>
                                         Option B:
                                                 <input id="option" name="3b" ><br>
                                         Option C: 
                                                 <input id="option" name="3c" ><br>
                                         Option D: 
                                                 <input id="option" name="3d" ><br><br>
                                          Answer :
                                                 <input id="answer" name="ans3">
                                    </div>
                                    
                                    <hr id="hr">


                                    <div class="form-group">
                                                 
                                                 <label>  Q.4</label>
                                                 <input name="q4" id="question" ><br><br>
                                         Option A:
                                                 <input id="option" name="4a" ><br>
                                         Option B:
                                                 <input id="option" name="4b" ><br>
                                         Option C: 
                                                 <input id="option" name="4c" ><br>
                                          Option D: 
                                                 <input id="option" name="4d" ><br><br>
                                           Answer :
                                                 <input id="answer" name="ans4">
                                    </div>
                                    
                                    <hr id="hr">



                                    <div class="form-group">
                                                 
                                                 <label>  Q.5</label>
                                                 <input name="q5" id="question" ><br><br>
                                          Option A:
                                                 <input id="option" name="5a" ><br>
                                         Option B:
                                                 <input id="option" name="5b" ><br>
                                         Option C: 
                                                 <input id="option" name="5c" ><br>
                                         Option D: 
                                                 <input id="option" name="5d" ><br><br>
                                          Answer :
                                                 <input id="answer" name="ans5">
                                    </div>
                                    
                                    <hr id="hr">



                                    <div class="form-group">
                                                 
                                                 <label>  Q.6</label>
                                                 <input name="q6" id="question" ><br><br>
                                         Option A:
                                                 <input id="option" name="6a" ><br>
                                          Option B:
                                                 <input id="option" name="6b" ><br>
                                         Option C: 
                                                 <input id="option" name="6c" ><br>
                                         Option D: 
                                                 <input id="option" name="6d" ><br><br>
                                          Answer :
                                                 <input id="answer" name="ans6">
                                    </div>
                                    
                                    <hr id="hr">



                                    <div class="form-group">
                                                 
                                                <label>   Q.7</label>
                                                 <input name="q7" id="question" ><br><br>
                                         Option A:
                                                 <input id="option" name="7a" ><br>
                                         Option B:
                                                 <input id="option" name="7b" ><br>
                                         Option C: 
                                                 <input id="option" name="7c" ><br>
                                         Option D: 
                                                 <input id="option" name="7d" ><br><br>
                                         Answer :
                                                 <input id="answer" name="ans7">
                                    </div>
                                    
                                    <hr id="hr">


                                    <div class="form-group">
                                                 
                                                 <label>  Q.8</label>
                                                 <input name="q8" id="question" ><br><br>
                                         Option A:
                                                 <input id="option" name="8a" ><br>
                                         Option B:
                                                 <input id="option" name="8b" ><br>
                                         Option C: 
                                                 <input id="option" name="8c" ><br>
                                         Option D: 
                                                 <input id="option" name="8d" ><br><br>
                                          Answer :
                                                 <input id="answer" name="ans8">
                                    </div>
                                    
                                    <hr id="hr">


                                    <div class="form-group">
                                                 
                                                 <label>  Q.9</label>
                                                 <input name="q9" id="question" ><br><br>
                                         Option A:
                                                 <input id="option" name="9a" ><br>
                                         Option B:
                                                 <input id="option" name="9b" ><br>
                                         Option C: 
                                                 <input id="option" name="9c" ><br>
                                         Option D: 
                                                 <input id="option" name="9d" ><br><br>
                                          Answer :
                                                 <input id="answer" name="ans9">
                                    </div>
                                    
                                    <hr id="hr">


                                    <div class="form-group">
                                                 
                                                <label>   Q.10</label>
                                                 <input name="q10" id="question" ><br><br>
                                          Option A:
                                                 <input id="option" name="10a" ><br>
                                         Option B:
                                                 <input id="option" name="10b" ><br>
                                         Option C: 
                                                 <input id="option" name="10c" ><br>
                                         Option D:
                                                 <input id="option" name="10d" ><br><br>
                                          Answer :
                                                 <input id="answer" name="ans10">
                                    </div>
                                    
                                    <hr id="hr">
                                
                                    <div class="form-group">
                                                <button type="submit" id="submit" class="btn btn-default">Submit</button>
                                    </div>
                        </form>
            </div>            
</div>       
 
</body>

</html>
