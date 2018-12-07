<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FrikiZone</title>
    <!-- CSS de Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Archivo css propio-->
    <link href="css/estilos_contacto.css" rel="stylesheet">
    </head>
    <body>
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
                      <li class="nav-item ">
                      <a class="nav-link" href="index.html">Inicio </a>
                      </li>
                      <li class="nav-item">
                      <a class="nav-link" href="categorias.html">Categorías</a>
                      </li>
                      <li class="nav-item">
                      <a class="nav-link" href="administracion.html">Administración</a>
                      </li>
                    </ul>
                      <form class="form-inline my-2 my-lg-0">
                       <button type="submit" name="registro" class="btn btn-outline-warning mx-4">Registrarse</button>
                       <button type="button" name="login" class="btn btn-outline-success" onclick="location.href='login.html'">Iniciar Sesión</button>
                    </form>
                      
    </div>
    </nav>
  </div>

                   </div>
                  
                       
                       
            <h1><br>Contacto</h1>
                  
                  
         <div id="contacto">	
			<div id="tabla">
			<center><table width="80%" border="0" cellspacing="0" cellpadding="1"> 
				<tr bgcolor="#C3C1C1" align="center"> 
					<td><b><font color="#FFFFFF">Formulario de contacto</font></b></td> 
				</tr> 
				<tr bgcolor="#C3C1C1"> 
					<td> 
						<table width="100%" border="0" cellspacing="0" cellpadding="4"> 
						<form action="#" method="post">	
							<tr bgcolor="#FFFFFF"> 
								<td>Nombre</td>
								<td><input class="form-control" type="text" name="nombre" id="nombre" style="text-align: center"></td>
								
							<tr bgcolor="#FFFFFF"> 
								<td>Correo</td>
								<td><input class="form-control" type="email" name="email" id="email" style="text-align: center"></td> 
							</tr>
							<tr bgcolor="#FFFFFF"> 
								<td>Mensaje</td>
								<td><textarea class="form-control" name="mensaje" id="mensaje" rows="10" cols="40"></textarea></td> 
							</tr>
							<tr bgcolor="#FFFFFF"> 
								<td></td>
								<td><center><button type="submit" name="enviar" class="btn btn-success" style="margin-bottom: 2%">Enviar</button></center></td>
							</tr>
							</tr> 
							</form>
						</table>
					</td> 
				</tr> 
			</table></center>
            </div>
			<div id="boton">
				    
         	</div>
				
		</div>         
                  
                  
                           
        <script src="js/jquery-3.3.1.js"></script>
        <script src="js/bootstrap.bundle.js"></script>
	</div>
    </body>
</html>