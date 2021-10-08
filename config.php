<?php
$servernam = "localhost";
$usernam = "root";
$passwor = "";
$databas = "eastend";

// Create connection
$conn = mysqli_connect($servernam, $usernam, $passwor, $databas);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
