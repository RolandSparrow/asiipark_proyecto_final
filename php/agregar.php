<?php
include("conexion.php");
if(!empty($_POST["Tipo_documento"])and !empty($_POST["N_documento"])and !empty($_POST["Tipo_usuario"])and !empty($_POST["Nombre_usuario"])and !empty($_POST["Apellido_usuario"])and !empty($_POST["Sexo_usuario"])and !empty($_POST["Direccion_usuario"])and !empty($_POST["Telefono_usuario"])and !empty($_POST["Celular_usuario"])and !empty($_POST["Email_usuario"])and !empty($_POST["Password_usuario"])){
    
    $Tipo_documento = $_POST["Tipo_documento"];
    $N_documento = $_POST["N_documento"];
    $Tipo_usuario = $_POST["Tipo_usuario"];
    $Nombre_usuario = $_POST["Nombre_usuario"];
    $Apellio_usuario = $_POST["Apellido_usuario"];
    $Sexo_usuario = $_POST["Sexo_usuario"];
    $Direccion_usuario = $_POST["Direccion_usuario"];
    $Telefono_usuario = $_POST["Telefono_usuario"];
    $Celular_usuario = $_POST["Celular_usuario"];
    $Email_usuario = $_POST["Email_usuario"];
    $Password_usuario = $_POST["Password_usuario"];

    $sql = "INSERT INTO usuarios_registro(Tipo_documento, N_documento, Tipo_usuario, Nombre_usuario, Apellido_usuario, Sexo_usuario, Direccion_usuario, Telefono_usuario, Celular_usuario, Email_usuario, Password_usuario)VALUES(:tipo_doc,:N_doc, :tipo_usu, :Nom_usu, :Ape_usu, :Sex_usu, :Direcci_usu, :Tele_usu, :Celu_usu, :Ema_usu, :Pass_usu)";

    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(":tipo_doc",$Tipo_documento);        
    $stmt->bindParam(":N_doc",$N_documento);
    $stmt->bindParam(":tipo_usu",$Tipo_usuario);
    $stmt->bindParam(":Nom_usu",$Nombre_usuario);
    $stmt->bindParam(":Ape_usu",$Apellio_usuario);
    $stmt->bindParam(":Sex_usu",$Sexo_usuario);
    $stmt->bindParam( ":Direcci_usu",$Direccion_usuario);
    $stmt->bindParam(":Tele_usu", $Telefono_usuario);
    $stmt->bindParam(":Celu_usu",$Celular_usuario);
    $stmt->bindParam(":Ema_usu",$Email_usuario);
    $stmt->bindParam(":Pass_usu",$Password_usuario);

    if($stmt->execute()){
        header("location:../html/page/administrador.php ");
    }
}

?> 