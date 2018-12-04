<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
       <title>Tabla</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
        
        include "codigo.php";
        
	$codigo = new codigo();
	$codigo ->setusuario(filter_input(INPUT_POST, 'usuario'));
	$codigo ->setpassword(filter_input(INPUT_POST, 'password'));
	$codigo ->setemail(filter_input(INPUT_POST, 'email'));
	$usuario = $codigo->usuario;
	$password = $codigo->password;
	$email = $codigo->email;
        
        $consulta4 = $codigo->seleccionar($usuario);
   
        ?>
        
        <h2 align ="center">Datos Usuario</h2>
        
        <table border = "1" class = "tabla" style="width:90%">
            <tr>
                
                <td>Nombre usuario</td>
                <td>Password</td>
                <td>Email</td>
                
            </tr>
            
            <tr>
                <td><?php echo $consulta4[4]; ?> </td>
                <td><?php echo $consulta4[5]; ?></td>   
                <td><?php echo $consulta4[9]; ?></td>
                
            </tr>
                
 
            
        </table>
         
    </body>
</html>
