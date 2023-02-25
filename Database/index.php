

<?php

$host = "localhost";
$database = "test_investree";
$username = "root";
$password = "";

echo "test";
// Create Connection 
$conn = mysqli_connect($host,$username,$password,$database);

// Check connection
if(!$conn){
    die("Connection failed : ".mysqli_connect_error());
}

echo "connection successfully";
mysqli_close($conn);