<?php
// variables del formulario 
$a = $_POST['nombre_usuario']; 
$b = $_POST['apellidos']; 
$c = $_POST['tipo_usuario']; 
$d = $_POST['calle'];
$e = $_POST['numero'];
$f = $_POST['piso'];
$g = $_POST['puerta'];
$h = $_POST['provincia'];
$i = $_POST['poblacion'];
$j = $_POST['cp'];
$k = $_POST['telefono'];
$l = $_POST['email'];
$m = $_POST['usuario'];
$n = $_POST['password'];







// conectar la base da datos 
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
$sql = "INSERT INTO Provincia (Provincia) VALUES (:Provincia);"; 
$result = $conn->prepare($sql); 
$result->bindValue(':Provincia', $h, PDO::PARAM_STR); 
$result->execute(); 
$lastId = $conn->lastInsertId();

// tabla 2 
$sql ="INSERT INTO Poblacion (Provincia,Poblacion,cp) VALUES (:h_id,:Poblacion, :cp) ;";
$result = $conn->prepare($sql); 
$result->bindValue(':h_id', $lastId, PDO::PARAM_INT); 
$result->bindValue(':Poblacion', $i, PDO::PARAM_STR); 
$result->bindValue(':cp', $j, PDO::PARAM_INT); 
$result->execute();
$lastId = $conn->lastInsertId();

  //tabla 3
$sql ="INSERT INTO Calle (Calle,Numero,Piso, Puerta) VALUES (:Calle,:Numero, :Piso,:Puerta) ;";
$result = $conn->prepare($sql); 
$result->bindValue(':Calle', $d, PDO::PARAM_STR); 
$result->bindValue(':Numero', $e, PDO::PARAM_INT); 
$result->bindValue(':Piso', $f, PDO::PARAM_STR); 
$result->bindValue(':Puerta', $g, PDO::PARAM_STR); 
$result->execute();
$lastId = $conn->lastInsertId();

// tabla 4
$sql = "INSERT INTO tipousuarios (tipo) VALUES (:tipo) ;";
$result = $conn->prepare($sql); 
$result->bindValue(':tipo', $c, PDO::PARAM_STR); 
$result->execute();
$lastId = $conn->lastInsertId();

// tabla 5 
$sql =  "INSERT INTO usuarios (tipousuario,calle, poblacion, usuario, password, nombre, apellidos, telefono, email )VALUES (:c_id,:d_id,:i_id, :usuario, :password, :nombre,:apellidos,:telefono,:email) ;";
$result = $conn->prepare($sql); 
$result->bindValue(':c_id', $lastId, PDO::PARAM_INT); 
$result->bindValue(':d_id', $lastId, PDO::PARAM_INT); 
$result->bindValue(':i_id', $lastId, PDO::PARAM_INT);
$result->bindValue(':usuario', $m, PDO::PARAM_STR); 
$result->bindValue(':password', $n, PDO::PARAM_STR);
$result->bindValue(':nombre', $a, PDO::PARAM_STR);
$result->bindValue(':apellidos', $b, PDO::PARAM_STR);
$result->bindValue(':telefono', $k, PDO::PARAM_STR);
$result->bindValue(':email', $l, PDO::PARAM_STR);
$result->execute();

$conn->commit(); 
echo 'Datos insertados'; 
} catch (PDOException $e) { 
// si ocurre un error hacemos rollback para anular todos los insert 
$conn->rollback(); 
echo $e->getMessage();; 
} 
