<?php

class Conectar
{
//establecemos la conexión con la base de datos
    public static function con()
    {
       $con = new mysqli ("localhost", "id7718276_byteraiders_user", "Byteraiders2018", "id7718276_byteraiders");
       if ($con->connect_errno) {
            printf("Falló la conexión: %s\n", $con->connect_error);
            exit();
        }else{
       
            return $con;
    
        }
    }
}

class codigo {
   
   //recogemos variables
    
     public function getusuario () 
    
    {
      
        return $this->usuario;   
               
        
    }
    
    public function setusuario ($usuario)
    {
       
        $this->usuario = $usuario;
    
    }
    
    public function getpassword () 
    
    {
      
        return $this->password;   
               
        
    }
    
    public function setpassword ($password)
    {
       
        $this->password = $password;
    
    }
    
    public function getemail () 
    
    {
      
        return $this->email;   
               
        
    }
    
    public function setemail ($email)
    {
       
        $this->email = $email;
    
    }
    
    //declaramos funciones
    //función para comprobar si existe usuario
    
    public function seleccionar($usuario)
    
    {
      $consulta =  "SELECT * FROM usuarios WHERE usuario like '".$usuario."';";
      $resa = new conectar;
      $res = $resa->con();   
      
    
      if ($resultado = $res->query($consulta)) 
        {
         
            
          $fila = $resultado->fetch_row();
          $resultado->close();
          $res->close();
          return $fila;

        }else // nos aseguramos el cierre de la conexion de la base de datos
      
        {
             $resultado->close();
             $res->close();
        }
      
    }
    
    //función para modificar datos
    
    public function update ($usuario,$password,$email)
            
    {
        $consulta2 = "UPDATE usuarios SET usuario = '".$usuario."', password = '".$password."', email = '".$email."' WHERE usuario like '".$usuario."'" ;
        $resa = new conectar;
        $res = $resa->con();
        $resultado = $res->query($consulta2);
    }
    
    public function delete ($usuario)
         {
       $consulta3 ="DELETE FROM usuarios WHERE usuario =".$usuario."; ";
       $resa = new conectar;
       $res = $resa->con();
       $resultado = $res->query($consulta3);
       
      
       if ($resultado) {
            
       
        $res->close();
     
           
           echo "Datos eliminados correctamente";
           
       }else {
           
       
           $res->close();
           
           echo "Error ocurrido al eliminar datos en el sistema. Contacte con el administrador.";
          
       }
       
    }
    
}
class fecha {   


 public function mostrar(){   
    
require_once("./conexion.php");

// iniciar transacción 
$conn->beginTransaction();

try { 



$sql = "SELECT * FROM producto where DATEDIFF(fecha_alta, NOW()) <2;"; 
$result = $conn->prepare($sql); 
$result->execute(); 
//$result->fetch(PDO::FETCH_BOTH);   




$conn->commit(); 


    
foreach ($result as $row){
  
    
     
   
 
     $p=$row['producto'];
   
     echo "<a href='detalle.php?pro=$p' style='text-decoration: none'><p><img src='img/boton_azul.jpg' width='25' height='25'/>&nbsp &nbsp ".$p."</p></a><br>"; 

       

  
}


}

    



catch(PDOException $e) {
echo '{"error":{"text":'. $e->getMessage() .'}}';
}

}
}

class fecha2 {   


 public function mostrar2(){   
    
require_once("./conexion.php");

// iniciar transacción 
$conn->beginTransaction();

try { 



$sql = "SELECT * FROM producto where DATEDIFF(NOW(), fecha_alta ) >30;"; 
$result = $conn->prepare($sql); 
$result->execute(); 
//$result->fetch(PDO::FETCH_BOTH);   




$conn->commit(); 


    
foreach ($result as $row){
  
    
     
   
 
     $p=$row['producto'];
   
     echo "<a href='detalle.php?pro=$p' style='text-decoration: none'><p><img src='img/boton_azul.jpg' width='25' height='25'/>&nbsp &nbsp ".$p."</p></a><br>"; 

       

  
}

}

    



catch(PDOException $e) {
echo '{"error":{"text":'. $e->getMessage() .'}}';
}

}
}

class fecha3 {   


 public function mostrar3(){   
    
require_once("./conexion.php");

// iniciar transacción 
$conn->beginTransaction();

try { 



$sql = "SELECT * FROM producto where DATEDIFF(fecha_alta, NOW()) <30;"; 
$result = $conn->prepare($sql); 
$result->execute(); 
//$result->fetch(PDO::FETCH_BOTH);   




$conn->commit(); 


    
foreach ($result as $row){
  
    
     
   
 
     $p=$row['producto'];
   
     echo "<a href='detalle.php?pro=$p' style='text-decoration: none'><p><img src='img/boton_azul.jpg' width='25' height='25'/>&nbsp &nbsp ".$p."</p></a><br>"; 

       

  
}


}

    



catch(PDOException $e) {
echo '{"error":{"text":'. $e->getMessage() .'}}';
}

}
}
