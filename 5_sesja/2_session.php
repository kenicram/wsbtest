<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sesja 2</title>
  </head>
  <body>
    <h4>Sesja 2</h4>
<?php
  echo "Identyfiaktor sesji: ".session_id()."<br>";
  echo $_SESSION['name']."<br>";
  echo $_SESSION['surname']."<br>";
  unset($_SESSION['name']);
 ?>
  <a href="./3_session.php">Sesja 3</a>
  </body>
</html>
