<?php

$host = 'db';
$dbname = 'tododb';
$user = 'root';
$pass = 'lionPass';

  // check the MySQL connection status
  $conn = new mysqli($host, $user, $pass, $dbname);
  if($conn->connect_error) {
    die("Connection failer:" . $conn->connect_error);
  } else {
    echo "Connected to MySQL server succesfully";
  }