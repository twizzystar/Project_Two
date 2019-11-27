<?php
  //session_start();
//if(isset($_SESSION['answer']))
//{
//header('Location:functions.php);
//exit;
//}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Math Quiz: Addition</title>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <div id="page-wrap">
      <form id="start-quiz" method="post" action="quiz.php">
          <div class="overlay index">
          <div class="quiz-overlay"></div>
      <h1 class="index-headline">How well can you do?</h1>
<p class="index-sell">This quiz will reveal your Math skills.</p>
              <input type="submit" id="submit" class="take-quiz-btn index-btn" value="Take The Quiz" />
          </div>
    <div class="container">
        <div id="quiz-box">
          <?php include ("inc/quiz.php");?>
        </div>
    </div>
</body>
</html>
            <!--<p class="breadcrumbs">Question # of #</p>
            <p class="quiz">What is 54 + 71?</p>
            <form action="index.html" method="post">
                <input type="hidden" name="id" value="0" />
                <input type="submit" class="btn" name="answer" value="135" />
                <input type="submit" class="btn" name="answer" value="125" />
                <input type="submit" class="btn" name="answer" value="115" />
            </form>
