<?php include 'session.php'; ?>
<?php include "selec_producto.php"; ?>
<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FrikiZone</title>
    <!-- CSS de Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Archivo css propio-->
    <link href="css/estilos_detalle.css" rel="stylesheet">
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
                      <li class="nav-item">
                      <a class="nav-link" href="index.html">Inicio </a>
                      </li>
                      <li class="nav-item">
                      <a class="nav-link" href="categorias.php">Categorías</a>
                      </li>
                      <li class="nav-item">
                      <a class="nav-link" href="carro_compra.php"><img src="img/cart-4x_1.png" alt="carro de la compra"></a>
                      </li>
                      <li class="nav-item">
                      <a class="nav-link" href="administracion.php">Administración</a>
                      </li>
                    </ul>
                      <form class="form-inline my-2 my-lg-0">
                       <button type="submit" name="registro" class="btn btn-outline-warning mx-4">Registrarse</button>
                       <button type="button" name="login" class="btn btn-outline-success" onclick="location.href='login.php'">Iniciar Sesión</button>
                    </form>
                      
    </div>
    </nav>
  </div>

                   </div>
                  
                       
                       
        <h1><br>DETALLE</h1>
			
		<h2><br>PRODUCTO: <?php echo $row[1] ; ?>&nbsp &nbsp PRECIO:<?php echo $row[3]."€" ; ?> </h2>	
			
			
		<div id="detalle">	
			<div id="tabla">
			<table width="95%" border="0" cellspacing="0" cellpadding="1"> 
				<tr bgcolor="#990033" align="center"> 
					<td><b><font color="#FFFFFF">Características del producto</font></b></td> 
				</tr> 
				<tr bgcolor="#990033"> 
					<td> 
						<table width="100%" border="0" cellspacing="0" cellpadding="4"> 
							<tr bgcolor="#FFFFFF"> 
								
								<td><img src="img/imagen_producto.jpg" width="100" height="100"/></td>
								
								<!--Características propias del producto-->
								<td> <?php echo $row[2] ; ?></td> 
							</tr> 
						</table> 
					</td> 
				</tr> 
			</table>
            </div>
			<div id="boton">
				<button type="button" class="btn btn-success" onclick="productoalacookie.php">Comprar</button>    
         	</div>
				
		</div>
                   
                   
            </div>                    
        <script src="js/jquery-3.3.1.js"></script>
        <script src="js/bootstrap.bundle.js"></script>
    </body>
</html>
