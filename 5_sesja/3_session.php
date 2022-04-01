<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sesja 3</title>
  </head>
  <body>
    <h4>Sesja 3</h4>
<?php
  session_regenerate_id();
  echo "Identyfiaktor sesji: ".session_id()."<br>";
  echo $_SESSION['name']."<br>";
 ?>
  <a href="./1_session.php">Sesja 1</a>
  </body>
</html>
