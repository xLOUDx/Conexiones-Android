<?php
 
 {
 $descripcion = $_POST['descripcion'];
 require_once('dbConnect.php');
 
 $datos = array();
    $query="SELECT * FROM `tareas` WHERE Descripcion like '%" . $descripcion . "%'"; 
    $result=mysqli_query($con,$query);
        
         while($row = mysqli_fetch_object($result)){
             $datos[] = $row;
         }   
        
        echo json_encode($datos);
 }