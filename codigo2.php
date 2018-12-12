<?php




class Conectar
{
//establecemos la conexión con la base de datos
    public static function con()
    {
//       $con = new mysqli ("localhost", "id7718276_byteraiders_user", "Byteraiders2018", "id7718276_byteraiders");
        $con = new mysqli ("localhost", "root", "1984", "p8");
       if ($con->connect_errno) {
            printf("Falló la conexión: %s\n", $con->connect_error);
            exit();
        }else{
       
            return $con;
    
        }
    }
}

class codigo2 {
    
    public function getnombre_usuario () 
    
    {
      
        return $this->nombre_usuario;   
               
        
    }
    
    public function setnombre_usuario ($nombre_usuario)
    {
       
        $this->nombre_usuario = $nombre_usuario;
    
    }
    
     public function getapellidos () 
    
    {
      
        return $this->apellidos;   
               
        
    }
    
    public function setapellidos ($apellidos)
    {
       
        $this->apellidos = $apellidos;
    
    }
    
     public function gettipo_usuario () 
    
    {
      
        return $this->tipo_usuario;   
               
        
    }
    
    public function settipo_usuario ($tipo_usuario)
    {
       
        $this->tipo_usuario = $tipo_usuario;
    
    }
    
    public function getcalle () 
    
    {
      
        return $this->calle;   
               
        
    }
    
    public function setcalle ($calle)
    {
       
        $this->calle = $calle;
    
    }
    
    public function getnumero () 
    
    {
      
        return $this->numero;   
               
        
    }
    
    public function setnumero ($numero)
    {
       
        $this->numero = $numero;
    
    }
    
    public function getpiso () 
    
    {
      
        return $this->piso;   
               
        
    }
    
    public function setpiso ($piso)
    {
       
        $this->piso = $piso;
    
    }
    
    public function getpuerta () 
    
    {
      
        return $this->puerta;   
               
        
    }
    
    public function setpuerta ($puerta)
    {
       
        $this->puerta = $puerta;
    
    }
    
    public function getprovincia () 
    
    {
      
        return $this->provincia;   
               
        
    }
    
    public function setprovincia ($provincia)
    {
       
        $this->provincia = $provincia;
    
    }
    
    public function getpoblacion () 
    
    {
      
        return $this->poblacion;   
               
        
    }
    
    public function setpoblacion ($poblacion)
    {
       
        $this->poblacion = $poblacion;
    
    }
    public function getcp () 
    
    {
      
        return $this->cp;   
               
        
    }
    
    public function setcp ($cp)
    {
       
        $this->cp = $cp;
    
    }
    
    public function gettelefono () 
    
    {
      
        return $this->telefono;   
               
        
    }
    
    public function settelefono ($telefono)
    {
       
        $this->telefono = $telefono;
    
    }
    
    public function getemail () 
    
    {
      
        return $this->email;   
               
        
    }
    
    public function setemail ($email)
    {
       
        $this->email = $email;
    
    }
    
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
    
    
    public function insertarusuario ($nombre_usuario,$apellidos, $telefono, $email)
            
    {
     $consulta="INSERT INTO usuarios (nombre, apellidos, telefono, email )VALUES ('".$nombre_usuario."', '".$apellidos."', '".$telefono."', '".$email."') ;";
     $resa = new conectar;
     $res = $resa->con();
     $resultado = $res->query($consulta);
     
     if ($resultado) {
            
       
        $res->close(); //cierre de la base de datos
     
           
           
           
       }else { //nos aseguramos el cierre de la base de datos
           
       
           $res->close();
           
           
          
       }
    }
    
    public function insertardomicilio($calle, $numero, $piso, $puerta)
    { 
     $consulta2="INSERT INTO Calle (Calle, Numero, Piso, Puerta) VALUES ('".$calle."', '".$numero."', '".$piso."', '".$puerta."'); ";
     $resa = new conectar;
     $res = $resa->con();
     $resultado2 = $res->query($consulta2);
     
      if ($resultado2) {
            
       
        $res->close();
     
           
           
           
       }else { //nos aseguramos el cierre de la base de datos
           
       
           $res->close();
           
         
          
       }
        
    }
    
    public function insertarpoblación($poblacion, $cp)
    {
     $consulta3="INSERT INTO Poblacion (Poblacion,cp) VALUES ('".$poblacion."', '".$cp."') ;";
     $resa = new conectar;
     $res = $resa->con();
     $resultado3 = $res->query($consulta3);
     
      if ($resultado3) {
            
       
        $res->close();
     
           
           
           
       }else { //nos aseguramos el cierre de la base de datos
           
       
           $res->close();
           
           
          
       }
        
    }
    public function insertarprovincia($provincia)
    {
     $consulta4="INSERT INTO Provincia (Provincia) VALUES ('".$provincia."');";
     $resa = new conectar;
     $res = $resa->con();
     $resultado4 = $res->query($consulta4);
     
      if ($resultado4) {
            
       
        $res->close();
     
           
           
           
       }else { //nos aseguramos el cierre de la base de datos
           
       
           $res->close();
           
           
          
       }
        
    }
    public function insertartipo_usuario($tipo_usuario)
    {
     $consulta5="INSERT INTO tipousuarios (tipo) VALUES ('".$tipo_usuario."') ;";
     $resa = new conectar;
     $res = $resa->con();
     $resultado5 = $res->query($consulta5);
     
      if ($resultado5) {
            
       
        $res->close();
     
           
           echo "Datos insertados correctamente";
           
       }else { //nos aseguramos el cierre de la base de datos
           
       
           $res->close();
           
           echo "Error ocurrido al insertar datos en el sistema. Contacte con el administrador.";
          
       }
        
    }
}
