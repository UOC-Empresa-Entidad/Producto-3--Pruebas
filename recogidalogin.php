<?php

include "codigo.php";

$codigo = new codigo();

$usuarioform = $_POST['usuario'];
$passwordform = $_POST['password'];
if ($filaform = $codigo->seleccionar($usuarioform)) {
    if ($filaform['password']==$passwordform) {
        $_SESSION['usuario']=$usuarioform;
        header ("Location: index.php");   
    } else {
        header ("Location: errorpassword.php");
    }
} else {
    header ("Location: errorusuario.php");
}