<?php

include("conexion.php");

if (!empty($_POST["Enviar"])){
    if(
        $Tipo_documento = $_POST["Tipo_documento"])
        $N_documento = $_POST["N_documento"];
        $Tipo_usuario = $_POST["Tipo_usuario"];
        $Nombre_usuario = $_POST["Nombre_usuario"];
        $Apellido_usuario = $_POST["Apellido_usuario"];
        $Sexo_usuario = $_POST["Sexo_usuario"];
        $Direccion_usuario = $_POST["Direccion_usuario"];
        $Telefono_usuario = $_POST["Telefono_usuario"];
        $Celular_usuario = $_POST["Celular_usuario"];
        $Email_usuario = $_POST["Email_usuario"];
        $Password_usuario = $_POST["Password_usuario"];    
        $sql="INSERT INTO usuarios_registro(Tipo_documento, N_documento, Tipo_usuario, Nombre_usuario, Apellido_usuario, Sexo_usuario, Direccion_usuario, Telefono_usuario, Celular_usuario, Email_usuario, Password_usuario)VALUES('$Tipo_documento','$N_documento','$Tipo_usuario','$Nombre_usuario','$Apellio_usuario','$Sexo_usuario','$Direccion_usuario','$Telefono_usuario','$Celular_usuario','$Email_usuario','$Password_usuario')";
        $resultado = mysqli_query($conexion,$sql);{
    }{
        !empty($_POST["Tipo_documento"])or !empty($_POST["N_documento"])or !empty($_POST["Tipo_usuario"])or !empty($_POST["Nombre_usuario"])or !empty($_POST["Apellido_usuario"])or !empty($_POST["Sexo_usuario"])or !empty($_POST["Direccion_usuario"])or !empty($_POST["Telefono_usuario"])or !empty($_POST["Celular_usuario"])or !empty($_POST["Email_usuario"])or !empty($_POST["Password_usuario"]);     
}
?>