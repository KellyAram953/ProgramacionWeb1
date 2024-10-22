<?php 
    $host_db = "127.0.0.1";
    $user_name = "root";
    $user_password = "";
    $db_name = "fes_aragon";

    $conexion = new mysqli($host_db,$user_name,$user_password,$db_name);

    if($conexion -> connect_error){
        echo "<h1> Error de conexion </h1>";
    } else{
        echo "<h1> Conexion realizada </h1>";
    }
?>