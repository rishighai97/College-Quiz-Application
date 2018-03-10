<?php
session_start();
?>
<!DOCTYPE html>

<html>

<head>
    <title>Quiz</title>
    <meta charset="ISO-8859-1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.8/jquery.validate.min.js"></script>
    <link href="http://localhost/quiz/css/paper.css" rel="stylesheet" type="text/css">
    <script src="js/admin.js" type="text/javascript"></script>

</head>



<body id="body">

<!-- Navigation bar -->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#" style="color:white;" id="a">Somaiya inpods</a>
        </div>
    </div>
</nav>

<h1 style="font-family:Bernard MT Condensed;color:#990000;text-align:center;" id="h1"><?php echo $_SESSION["title"]; ?></h1>
<div id="quiz" class="container">
<form method="post" action="http://localhost/quiz/pages/solution.php">

<label id="q1">Q.1<?php echo " ".$_SESSION["'q'.1"]." ";?></label><br>
    A. <?php echo " ".$_SESSION["1.'a'"]." ";?> <input type="radio" name="1"  id="radio" value="<?php echo $_SESSION["1.'a'"];?>"><br>
    B. <?php echo " ".$_SESSION["1.'b'"]." ";?><input type="radio" name="1"  id="radio" value="<?php echo $_SESSION["1.'b'"];?>"><br>
    C. <?php echo " ".$_SESSION["1.'c'"]." ";?><input type="radio" name="1"  id="radio" value="<?php echo $_SESSION["1.'c'"];?>"><br>
    D. <?php echo " ".$_SESSION["1.'d'"]." ";?><input type="radio" name="1"  id="radio" value="<?php echo $_SESSION["1.'d'"];?>"><br><br>

    <label id="q1">Q.2<?php echo " ".$_SESSION["'q'.2"]." ";?></label><br>
    A. <?php echo " ".$_SESSION["2.'a'"]." ";?><input type="radio" name="2"  id="radio" value="<?php echo $_SESSION["2.'a'"];?>"><br>
    B. <?php echo " ".$_SESSION["2.'b'"]." ";?><input type="radio" name="2"  id="radio" value="<?php echo $_SESSION["2.'b'"];?>"><br>
    C. <?php echo " ".$_SESSION["2.'c'"]." ";?><input type="radio" name="2"  id="radio" value="<?php echo $_SESSION["2.'c'"];?>"><br>
    D. <?php echo " ".$_SESSION["2.'d'"]." ";?><input type="radio" name="2"  id="radio" value="<?php echo $_SESSION["2.'d'"];?>"><br><br>

    <label id="q1">Q.3<?php echo " ".$_SESSION["'q'.3"];?></label><br>
    A. <?php echo " ".$_SESSION["3.'a'"]." ";?><input type="radio" name="3"  id="radio" value="<?php echo $_SESSION["3.'a'"];?>"><br>
    B. <?php echo " ".$_SESSION["3.'b'"]." ";?><input type="radio" name="3"  id="radio" value="<?php echo $_SESSION["3.'b'"];?>"><br>
    C. <?php echo " ".$_SESSION["3.'c'"]." ";?><input type="radio" name="3"  id="radio" value="<?php echo $_SESSION["3.'c'"];?>"><br>
    D. <?php echo " ".$_SESSION["3.'d'"]." ";?><input type="radio" name="3"  id="radio" value="<?php echo $_SESSION["3.'d'"];?>"><br><br>

    <label id="q1">Q.4<?php echo " ".$_SESSION["'q'.4"]." ";?></label><br>
    A. <?php echo " ".$_SESSION["4.'a'"]." ";?><input type="radio" name="4"  id="radio" value="<?php echo $_SESSION["4.'a'"];?>"><br>
    B. <?php echo " ".$_SESSION["4.'b'"]." ";?><input type="radio" name="4"  id="radio" value="<?php echo $_SESSION["4.'b'"];?>"><br>
    C. <?php echo " ".$_SESSION["4.'c'"]." ";?><input type="radio" name="4"  id="radio" value="<?php echo $_SESSION["4.'c'"];?>"><br>
    D. <?php echo " ".$_SESSION["4.'d'"]." ";?><input type="radio" name="4"  id="radio" value="<?php echo $_SESSION["4.'d'"];?>"><br><br>

    <label id="q1">Q.5<?php echo " ".$_SESSION["'q'.5"]." ";?></label><br>
    A. <?php echo " ".$_SESSION["5.'a'"]." ";?><input type="radio" name="5"  id="radio" value="<?php echo $_SESSION["5.'a'"];?>"><br>
    B. <?php echo " ".$_SESSION["5.'b'"]." ";?><input type="radio" name="5"  id="radio" value="<?php echo $_SESSION["5.'b'"];?>"><br>
    C. <?php echo " ".$_SESSION["5.'c'"]." ";?><input type="radio" name="5"  id="radio" value="<?php echo $_SESSION["5.'c'"];?>"><br>
    D. <?php echo " ".$_SESSION["5.'d'"]." ";?><input type="radio" name="5"  id="radio" value="<?php echo $_SESSION["5.'d'"];?>"><br><br>

    <label id="q1">Q.6<?php echo " ".$_SESSION["'q'.6"]." ";?></label><br>
    A. <?php echo " ".$_SESSION["6.'a'"]." ";?><input type="radio" name="6"  id="radio" value="<?php echo $_SESSION["6.'a'"]?>"><br>
    B. <?php echo " ".$_SESSION["6.'b'"]." ";?><input type="radio" name="6"  id="radio" value="<?php echo $_SESSION["6.'b'"]?>"><br>
    C. <?php echo " ".$_SESSION["6.'c'"]." ";?><input type="radio" name="6"  id="radio" value="<?php echo $_SESSION["6.'c'"]?>"><br>
    D. <?php echo " ".$_SESSION["6.'d'"]." ";?><input type="radio" name="6"  id="radio" value="<?php echo $_SESSION["6.'d'"]?>"><br><br>

    <label id="q1">Q.7<?php echo " ".$_SESSION["'q'.7"]." ";?></label><br>
    A. <?php echo " ".$_SESSION["7.'a'"]." ";?><input type="radio" name="7"  id="radio" value="<?php echo $_SESSION["7.'a'"];?>"><br>
    B. <?php echo " ".$_SESSION["7.'b'"]." ";?><input type="radio" name="7"  id="radio" value="<?php echo $_SESSION["7.'b'"];?>"><br>
    C. <?php echo " ".$_SESSION["7.'c'"]." ";?><input type="radio" name="7"  id="radio" value="<?php echo $_SESSION["7.'c'"];?>"><br>
    D. <?php echo " ".$_SESSION["7.'d'"]." ";?><input type="radio" name="7"  id="radio" value="<?php echo $_SESSION["7.'d'"];?>"><br><br>

    <label id="q1">Q.8<?php echo " ".$_SESSION["'q'.8"]." ";?></label><br>
    A. <?php echo " ".$_SESSION["8.'a'"]." ";?><input type="radio" name="8"  id="radio" value="<?php echo $_SESSION["8.'a'"];?>"><br>
    B. <?php echo " ".$_SESSION["8.'b'"]." ";?><input type="radio" name="8"  id="radio" value="<?php echo $_SESSION["8.'b'"];?>"><br>
    C. <?php echo " ".$_SESSION["8.'c'"]." ";?><input type="radio" name="8"  id="radio" value="<?php echo $_SESSION["8.'c'"];?>"><br>
    D. <?php echo " ".$_SESSION["8.'d'"]." ";?><input type="radio" name="8"  id="radio" value="<?php echo $_SESSION["8.'d'"];?>"><br><br>

    <label id="q1">Q.9<?php echo " ".$_SESSION["'q'.9"]." ";?></label><br>
    A. <?php echo " ".$_SESSION["9.'a'"]." ";?><input type="radio" name="9"  id="radio" value="<?php echo $_SESSION["9.'a'"];?>"><br>
    B. <?php echo " ".$_SESSION["9.'b'"]." ";?><input type="radio" name="9"  id="radio" value="<?php echo $_SESSION["9.'b'"];?>"><br>
    C. <?php echo " ".$_SESSION["9.'c'"]." ";?><input type="radio" name="9"  id="radio" value="<?php echo $_SESSION["9.'c'"];?>"><br>
    D. <?php echo " ".$_SESSION["9.'d'"]." ";?><input type="radio" name="9"  id="radio" value="<?php echo $_SESSION["9.'d'"];?>"><br><br>

    <label id="q1">Q.10<?php echo " ".$_SESSION["'q'.10"]." ";?></label><br>
    A. <?php echo " ".$_SESSION["10.'a'"]." ";?><input type="radio" name="10"  id="radio" value="<?php echo $_SESSION["10.'a'"]?>"><br>
    B. <?php echo " ".$_SESSION["10.'b'"]." ";?><input type="radio" name="10"  id="radio" value="<?php echo $_SESSION["10.'b'"]?>"><br>
    C. <?php echo " ".$_SESSION["10.'c'"]." ";?><input type="radio" name="10"  id="radio" value="<?php echo $_SESSION["10.'c'"]?>"><br>
    D. <?php echo " ".$_SESSION["10.'d'"]." ";?><input type="radio" name="10"  id="radio" value="<?php echo $_SESSION["10.'d'"]?>"><br><br>

    <input type="submit" value="submit" name="submit" id="submit">

</form>

</div>


</body>

</html>