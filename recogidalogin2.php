<?php
   

$usuario = $_POST['usuario'];
$password = $_POST['password'];
   
$db = 'p8'; 
$host = 'localhost'; 
$user = 'root'; 
$pass = ''; 
$conn = new PDO("mysql:dbname=".$db.";host=".$host,$user, $pass); 
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// iniciar transacción 
$conn->beginTransaction();

try { 
// tabla 1 
$sql = "SELECT IdUsuario FROM usuarios WHERE usuario = :usuario AND password = :password ;"; 
$result = $conn->prepare($sql); 
$result->bindValue(':usuario', $usuario, PDO::PARAM_STR);
$result->bindValue(':password', $password, PDO::PARAM_STR);
$result->execute(); 
$count = $result->rowCount();
$data=$result->fetch(PDO::FETCH_OBJ);




$conn->commit(); 

if($count)
{
$_SESSION['IdUsuario']=$data->IdUsuario; // Storing user session value

header("Location: categorias.php"); 


}
else
{
echo "Usuario no registrado. <a href='login.php'>Volver</a>";  
} 
}
catch(PDOException $e) {
echo '{"error":{"text":'. $e->getMessage() .'}}';
}











 






