<?php

include "codigo2.php";

$codigo2 = new codigo2();

$codigo2->setnombre_usuario(filter_input(INPUT_POST, 'nombre_usuario'));
$codigo2->setapellidos(filter_input(INPUT_POST, 'apellidos'));
$codigo2->settipo_usuario(filter_input(INPUT_POST, 'tipo_usuario'));
$codigo2->setcalle(filter_input(INPUT_POST, 'calle'));
$codigo2->setnumero(filter_input(INPUT_POST, 'numero'));
$codigo2->setpiso(filter_input(INPUT_POST, 'piso'));
$codigo2->setpuerta(filter_input(INPUT_POST, 'puerta'));
$codigo2->setprovincia(filter_input(INPUT_POST, 'provincia'));
$codigo2->setpoblacion(filter_input(INPUT_POST, 'poblacion'));
$codigo2->setcp(filter_input(INPUT_POST, 'cp'));
$codigo2->settelefono(filter_input(INPUT_POST, 'telefono'));
$codigo2->setemail(filter_input(INPUT_POST, 'email'));
$codigo2->setusuario(filter_input(INPUT_POST, 'usuario'));
$codigo2->sertpassword(filter_input(INPUT_POST, 'password'));

$nombre_usuario = $codigo2->nombre_usuario ;
$apellidos = $codigo2->apellidos ;
$tipo_usuario = $codigo2->tipo_usuario ;
$calle = $codigo2->calle ;
$numero = $codigo2->numero ;
$piso = $codigo2->piso ;
$puerta = $codigo2->puerta ;
$provincia = $codigo2->provincia ;
$poblacion = $codigo2->poblacion ;
$cp = $codigo2->cp ;
$telefono = $codigo2->telefono ;
$email = $codigo2->email ;
$usuario = $codigo2->usuario ;
$password = $codigo2->password ;

$insertar = $codigo2->insertarusuario ($nombre_usuario,$apellidos, $telefono, $email);
$insertar2 = $codigo2-> insertardomicilio($calle, $numero, $piso, $puerta) ;
$insertar3 = $codigo2-> insertarpoblación($poblacion, $cp);
$insertar4 = $codigo2->insertarprovincia($provincia);
$insertar5 = $codigo2->insertartipo_usuario($tipo_usuario);

?>

