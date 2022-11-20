<?php
include("conexion.php");
if (!empty($_POST["ingresar"])){
    if (!empty($_POST["Numero_Identificacion"]) and !empty($_POST["password"])) {
        $N_identificacion=$_POST["Numero_Identificacion"];
        $contra=$_POST["password"];
        $query="select * from login  where user_name ='$N_identificacion' and contraseña='$contra'";
        $result_login = mysqli_query($conexion, $query);
        if ($datos=$result_login->fetch_object()){
            header("Location:administrador.php");
        }
       else {
    echo "<div class='alert alert-danger'> acceso denegado </div>";
       } 
    }
    else {
        echo "<div class='alert alert-danger'> acceso denegado </div>";
    }
}
?>