<?php  
    session_start();
    $servername = "db";   # Nombre del servicio del contenedor MySQL
    $username = "root";   
    $password = "";   
    $database = "sistema";   
    $port = "3306";  # Puerto de MySQL por defecto

    $conn = mysqli_connect($servername, $username, $password, $database, $port);
    if (!$conn) {
        die("Conexion no establecida: " . mysqli_connect_error());
    }
?>
