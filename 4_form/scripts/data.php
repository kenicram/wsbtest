<?php
echo "<h4>Dane użytkownika</h4>";
//echo $_POST['name'];
//print_r($_POST);
/*if (!empty($_POST['name']&&!empty($_POST['surname'])))
{
  foreach ($_POST as $key => $value)
  {
    echo "$key: $value<br>";
  }
}
else
  {
  echo "<script>history.back();</script>";
  }
*/
$error=0;
if (!isset($_POST['gender'], $_POST['terms'])) {
    $error=1;
}

foreach ($_POST as $key => $value) {
  if (empty($value)) {
    $error=1;
  }
  else {
    echo "$key: $value<br>";
  }
}
  if($error !=0) {
    echo "<script>history.back();</script>";
    exit();
  }
 ?>
