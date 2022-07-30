<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "afrea";


$conn = mysqli_connect($hostname, $username, $password, $dbname);

if($conn)
{
    // Exucute when connection is successful
	// header("../loader/loader.php")
}
else{
    echo "there is a problem in your connection";
}