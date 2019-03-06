<?php

echo $name;

$nazwa = test_input($_POST["name"]);
echo $nazwa;

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}





echo str_shuffle($nazwa);
?>

