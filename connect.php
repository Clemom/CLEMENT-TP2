<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "supdevinci";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);  
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
