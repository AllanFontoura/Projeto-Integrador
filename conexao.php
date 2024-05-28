<?php
$mysqli = new mysqli("localhost","root","","digotur");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
} else {
//  echo "Conexão feita!";
//  echo "<pre>";
//  var_dump($mysqli);
//  echo "</pre>";
}
?>