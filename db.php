<?php
$host = "localhost";
$user = "root";       // default XAMPP user
$pass = "";           // default XAMPP password
$dbname = "apna_user"; // tumhara database
$conn = mysqli_connect($host, $user, $pass, $dbname);

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}
?>
