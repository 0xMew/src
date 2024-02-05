<?php
$servername = "db-1"; 
$username = "root";   
$password = "password";  
$dbname = "studentsinfo";    


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
