<?php
 
 {
 $tipo_mascota = $_POST['tipo_mascota'];
 require_once('dbConnect.php');
 
 $datos = array();
    $query=("SELECT raza from mascotas where tipo_mascota = '$tipo_mascota'"); 
    $result=mysqli_query($con,$query);
        
         while($row = mysqli_fetch_object($result)){
             $datos[] = $row;
         }  
        echo json_encode($datos);
 }
