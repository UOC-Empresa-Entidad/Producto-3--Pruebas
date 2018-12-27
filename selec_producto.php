<?php

   


   
require_once("./conexion.php");

// iniciar transacción 
$conn->beginTransaction();

try { 

$sql = "SELECT * FROM producto;"; 
$result = $conn->prepare($sql); 
$result->execute(); 





$conn->commit(); 

foreach ($result as $row){
    
 
}
}

catch(PDOException $e) {
echo '{"error":{"text":'. $e->getMessage() .'}}';
}

