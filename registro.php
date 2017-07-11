<?php
	
$username = $_POST['username'];
$password = $_POST['password'];
$nombre = $_POST['nombre'];

require_once('dbConnect.php');


$query="insert into usuarios(Nombre,Usuario, password) values ('$nombre','$username','$password')";
mysqli_query($con,$query);

?>	