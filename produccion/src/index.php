<?php

require 'vendor/autoload.php';

echo "<h1>Ambiente de produccion</h1>";


$servername = "mysql2";
$username = "mora2";
$password = "mora";

// Create connection
    $conn = new mysqli($servername, $username, $password);

// Check connection
             if ($conn->connect_error) {
                         die("Connection failed: " . $conn->connect_error);
                                             }
                                    echo "Ok en Mysql<br><br>";


$m = new MongoDB\Client("mongodb://27018:27017");

if ($m == NULL){
      echo "m is NULL</br><br>";
      }else{
           echo "Ok en MongoDB<br><br>";
      }
?>
