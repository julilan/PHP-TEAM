<?php

$host = 'db';
$dbname = 'todoDb';
$user = 'root';
$pass = 'lionPass';

  // check the MySQL connection status
  $conn = new mysqli($host, $user, $pass, $dbname);
  
  if(!$conn) {
    die(mysqli_error($conn));
  }

  ?>