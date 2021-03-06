<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FrikiZone</title>
    <!-- CSS de Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Archivo css propio-->
    <link href="css/estilos_administracion.css" rel="stylesheet">
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

	 ?>
	
       <!-- Abrimos div contenedor de bootstrap para la rejilla (grid) -->
        <div class="container text-center">
           <!-- Iniciamos la rejilla con el logo de la imagen corporativa -->
            <div class="row">
                <div class="col-12">
                    <img src="img/frikizone4.png" class="img-rounded img-fluid float-center enter" title="Logo FrikiZone" alt="Logo FrikiZone" />
                </div>
            </div>
        
            <!-- El siguiente renglón de la rejilla será el menú de navegación -->
            <div class="row">
                 <div class="col-12"> 
                    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                    <a class="navbar-brand" href="index.html">FrikiZone</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#inicio" aria-controls="barracolapsa" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="inicio">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                      <li class="nav-item">
                      <a class="nav-link" href="index.html">Inicio </a>
                      </li>
                      <li class="nav-item">
                      <a class="nav-link" href="categorias.php">Categorías</a>
                      </li>
                      <li class="nav-item">
                      <a class="nav-link" href="contacto.php">Contacto</a>
                      </li>
                      <li class="nav-item">
                      <a class="nav-link" href="carro_compra.php"><img src="img/cart-4x_1.png" alt="carro de la compra"></a>
                      </li>
                      <li class="nav-item active">
                      <a class="nav-link" href="administracion.php">Administración <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                      <a class="nav-link" href="cerrar.php">Logout</a>
                      </li>

                    </ul>
<!-- Se supone que para llegar a la pantalla de administración ya debemos estar logados, los botones de registro y login no deben estar disponibles.
                      <form class="form-inline my-2 my-lg-0">
                       <button type="submit" name="registro" class="btn btn-outline-warning mx-4">Registrarse</button>
                       <button type="button" name="login" class="btn btn-outline-success" onclick="location.href='login.html'">Iniciar Sesión</button>
                    </form>
-->
                      
    </div>
    </nav>
  </div>

                   </div>
                  
                       
                       
                       <h1><br>ADMINISTRACIÓN</h1>
			
			
	<div id="formulario_administracion">
		<center><table>
				
				<form action="#" method="post">
				<tr><td><center><strong>Nuevo usuario:&nbsp</strong><input type="text" name="usuario" id="usuario" style=" text-align: center; margin: 0px auto;border-radius: 10px 10px 10px 10px;moz-border-radius: 10px 10px 10px 10px;webkit-border-radius:10px 10px 10px 10px;border: 1px solid #000000;"></center></td></tr>
				<tr><td><center><strong>Nuevo password:&nbsp</strong><input type="password" name="password" id="password" style=" text-align: center; margin: 0px auto;border-radius: 10px 10px 10px 10px;moz-border-radius: 10px 10px 10px 10px;webkit-border-radius:10px 10px 10px 10px;border: 1px solid #000000;"></center></td></tr>
				<tr><td><center><strong>Nuevo email:&nbsp</strong><input type="email" name="email" id="email" style=" text-align: center; margin: 0px auto;border-radius: 10px 10px 10px 10px;moz-border-radius: 10px 10px 10px 10px;webkit-border-radius:10px 10px 10px 10px;border: 1px solid #000000;"></center></td></tr>
				
				<!--botón para registrar cambios-->
				<tr><td><center><button type="submit" style="margin-top: 10%" name="Enviar1" class="btn btn-success" value="Modificar datos" id="Enviar1">Guardar</button>
					
				<!--botón para eliminar-->
				<button type="submit" style="margin-top: 10%" name="Enviar2" class="btn btn-danger" value="Eliminar datos" id="Enviar2">Eliminar</button>	
				
				<!--botón para visualizar los cambios-->	
				<button type="submit" style="margin-top: 10%" name="ver_cambios" class="btn btn-info">Ver cambios</button></center></td></tr>
				
				</form>
		</table></center>
		
		
			
	</div>
		<?php
         
          switch ((filter_input(INPUT_POST, 'Enviar1')) || (filter_input(INPUT_POST, 'Enviar2'))) {
         
          case true: 
                 if  ((filter_input(INPUT_POST, 'Enviar1'))) { 
             
             $consulta3 = $codigo->update ($usuario,$password,$email);
             
            }
            if ((filter_input(INPUT_POST, 'Enviar2'))) { 
             
             $consulta2 = $codigo->delete ($usuario);
             
         }

              break;

            default:
                
              break;
      }
         
     
         

         
         
         ?>
			
	   
                   
                   
            </div>                    
        <script src="js/jquery-3.3.1.js"></script>
        <script src="js/bootstrap.bundle.js"></script>
    </body>
</html>
