<?php

echo "<h1>mi app PHP :D</h1>";

echo "<p>Párrafo de ejemplo</p>";

$servername = "angry_galileo";
$username = "root";
$password = "mora";

// Create connection
  $conn = new mysqli($servername, $username, $password);

// Check connection
   if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
        }
           echo "Connected successfully";
?>
