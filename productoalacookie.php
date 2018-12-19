<?php include 'session.php'; ?>
<?php // Recibimos los valores de la página detalle.php, en concreto id del producto y cantidad seleccionada (como solo podemos comprar un artículo cada vez,       esto no hace falta).
if !($usuario==0){
    //La variable sesion cantidadproductos almacena la cantidad de productos que hemos almacenado en el carro de la compra, cada vez que se añade otro se suma a esta variable.
    $cantidadproductos = $cantidadproductos+1;
    $idproducto = $_POST['idproducto'];
    setcookie(carrocompra[$cantidadproductos],$idproducto, time()+60*60*2);
} else {
    header ("Location: errorusuario.php");
}