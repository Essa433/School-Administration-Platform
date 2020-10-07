<?php
  include"database.php";
  session_start();
  if(!isset($_SESSION["TID"]))
  {
    echo"<script>window.open('teacher_login.php?mes=Access Denied...','_self');</script>";
    
  } 
  
  
?>

<!DOCTYPE html>
<html>
<head>
  <title>PHP File Upload</title>
  <link rel="stylesheet" type="text/css" href="css/SSS.css">
</head>
<body>

      <?php include"navbar.php";?><br>


      <div id="section">
      
      <?php include"sidebar2.php";?><br>

      <h3 style="margin-left: 50px;">
    The student Quizs page :
            </h3><br><br><hr>

<form action="index2.php" method="get" id="form1">
</form>
<button type="submit" form="form1" style="  border-radius:5px; padding:10px; background:#2398AB; color:white; margin-top:40px; margin-left: 180px; width: 200px; "> Math</button>

<br><br>

<form action="https://docs.google.com/forms/d/e/1FAIpQLSe4HTm0vjOmzc5DpX1gc9M9fhkc5Ciwndd70y_V2SqMf5gFLA/viewform" method="get" id="form2">
</form>
<button type="submit" form="form2" style="border-radius:5px; padding:10px; background:#2398AB; color:white; margin-top:30px; margin-left: 180px; width: 200px;"> Arabic </button>



  <?php include"footer.php";?>
</body>
</html>
