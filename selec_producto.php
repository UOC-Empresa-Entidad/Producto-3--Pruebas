<?php

   


   
$db = 'P8'; 
$host = 'localhost'; 
$user = 'root'; 
$pass = ''; 
$conn = new PDO("mysql:dbname=".$db.";host=".$host,$user, $pass); 
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

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

