<?php
 
 {
  $nombre_tarea = $_POST['nombre_tarea'];
 require_once('dbConnect.php');
 
 $datos = array();
    $query=("SELECT *from tarea_finalizada where nombre_tarea = '$nombre_tarea'"); 
    $result=mysqli_query($con,$query);
        
         while($row = mysqli_fetch_object($result)){
             $datos[] = $row;
         }   
        
        echo json_encode($datos);
 }