<?php

require_once("./conexion.php");

$a = $_POST['nombre_producto']; 
$b = $_POST['lista']; //categoria
$c = $_POST['precio_producto']; 
$d = $_POST['imagen_producto'];
$e = $_POST['descripcion_producto'];


// iniciar transacción 
$conn->beginTransaction();


try { 
// tabla 1 
$sql = "INSERT INTO producto (producto, descripcion, precio, fecha_alta, cantidadstock) VALUES (:producto, :descripcion, :precio, NOW(), 2);"; 
$result = $conn->prepare($sql); 
$result->bindValue(':producto', $a, PDO::PARAM_STR); 
$result->bindValue(':descripcion', $e, PDO::PARAM_STR); 
$result->bindValue(':precio', $c, PDO::PARAM_STR); 
$result->execute(); 
$lastId = $conn->lastInsertId();

// tabla 2 
$sql ="INSERT INTO imagenes (enlace,IdProducto) VALUES (:enlace,:a_id) ;";
$result = $conn->prepare($sql); 
$result->bindValue(':a_id', $lastId, PDO::PARAM_INT); 
$result->bindValue(':enlace', $d, PDO::PARAM_STR); 
$result->execute();

//tabla 3
$sql ="INSERT INTO categoria (categoria,producto) VALUES (:categoria,:a_id) ;";
$result = $conn->prepare($sql); 
$result->bindValue(':a_id', $lastId, PDO::PARAM_INT); 
$result->bindValue(':categoria', $b, PDO::PARAM_STR); 
$result->execute();


$conn->commit(); 
echo 'Producto insertado'; 
} catch (PDOException $e) { 
// si ocurre un error hacemos rollback para anular todos los insert 
$conn->rollback(); 
echo $e->getMessage();; 
} 

