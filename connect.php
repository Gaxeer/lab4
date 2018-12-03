<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lab4";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
function clear_bd(){
    global $conn;
    $conn->query("DELETE FROM people;");
};
function set_id(){
    global $conn;
    $conn->query("DELETE FROM people;");
};

?>