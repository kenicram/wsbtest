<?php
  $name="Janusz";
  echo "Imie: $name<br>";
  echo 'Imie: $name<br>';


//heredoc

$surname="Nowak";
$city="Poznań";
echo <<< E
  Imię i nazwisko: $name $surname <br>
  Miasto: $city<br>
  <hr>
E;
//nowdoc
echo <<< 'E'
  Imię i nazwisko: $name $surname <br>
  Miasto: $city<br>
  <hr>
E;
