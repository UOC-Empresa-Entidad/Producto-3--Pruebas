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
    
     public function getusuario () // cambiar variables cuando javi haga plantilla html. coge variables login usuarios
    
    {
      
        return $this->usuario;   
               
        
    }
    
    public function setusuario ($usuario)
    {
       
        $this->numero = $usuario;
    
    }
    
    public function getpassword () // cambiar variables cuando javi haga plantilla html. Coge contraseña login de usuarios
    
    {
      
        return $this->password;   
               
        
    }
    
    public function setpassword ($password)
    {
       
        $this->numero = $password;
    
    }
    
    public function getemail () // cambiar variables cuando javi haga plantilla html. Coge contraseña login de usuarios
    
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



?>