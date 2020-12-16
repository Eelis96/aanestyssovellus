<?php
$servername = "localhost";
$db_username = "root";
$db_password = "";
$db = "votedb";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$db;charset=utf8", $db_username, $db_password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}