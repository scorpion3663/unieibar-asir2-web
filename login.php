<?php
//leer el usuario y contraseña
//lee desde el formulario
$nombre = $_POST["usuario"];
$contraseña = $_POST["password"];

//if ($_REQUEST["usuario"] == "Mikel" && $_REQUEST["password"] == "navarro")
//{
    //echo "ok";
//}
//else {
    //echo "KO";
//}

$servername = "localhost:3307";
$username = "root";
$password = "";
$db="usuarios";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
echo "Connected successfully";
$query = "SELECT * FROM usuarios WHERE nombre='$nombre' AND contraseña='$contraseña'";
echo $query;

?>