<?php 

include("databaseconnect.php");

    $connect = new mysqli("localhost","id13876943_voluntario","Basedeprueba01!","id13876943_prueba") or die('Error al conectar'. mysqli_errno($connect));

    $email= $_POST['email'] ?? '';
    $clave = $_POST['clave'] ?? '';
    $fechareg = date("d/m/y");


    $query= "INSERT INTO datos(email, clave, fecha_reg) VALUES ('$email','$clave','$fechareg')";

    $result = mysqli_query($connect, $query);   

    mysqli_close($connect);

?>









