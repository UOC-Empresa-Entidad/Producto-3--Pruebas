<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FrikiZone</title>
    <!-- CSS de Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Archivo css propio-->
    <link href="css/estilos_lista.css" rel="stylesheet">
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
                      <li class="nav-item active">
                      <a class="nav-link" href="index.html">Inicio <span class="sr-only">(current)</span></a>
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
                       <button type="button" name="login" class="btn btn-outline-success" onclick="location.href='login.html'">Iniciar Sesión</button>
                    </form>
                      
    </div>
    </nav>
  </div>

                   </div>
                  
                       
                       
        <h2><br>LISTA MERCAHNDISING</h2><br><br>
                       
                   
          <?php
			
			include("conexion_mysql.php");
			
			$query="SELECT p8.producto.producto FROM p8.producto, p8.categoria WHERE p8.categoria.Categoria=3 AND p8.categoria.producto=p8.producto.IdProducto";
			$result=mysqli_query($conectar,$query);
			while($produc=mysqli_fetch_array($result)){
				
			

					
			echo		"<a href='detalle.php' style='text-decoration: none'><p><img src='img/boton_azul.jpg' width='25' height='25'/>&nbsp &nbsp ".$produc['producto']."</p></a><br>";
	
				
			}
                   
          ?>        
                   
                   
                   
                   
                   <!--<div id="lista">
                   	
                   	
                   	<a href="detalle.php" style="text-decoration: none"><p><img src="img/boton_azul.jpg" width="25" height="25"/>&nbsp &nbsp Producto 1 merchandising</p></a><br>
                   	<a href="detalle.php" style="text-decoration: none"><p><img src="img/boton_azul.jpg" width="25" height="25"/>&nbsp &nbsp Producto 2 merchandising</p></a><br>
                   	<a href="detalle.php" style="text-decoration: none"><p><img src="img/boton_azul.jpg" width="25" height="25"/>&nbsp &nbsp Producto 3 merchandising</p></a>
                   	
                   </div>-->
                       
                   
                   
                   
            </div>                    
        <script src="js/jquery-3.3.1.js"></script>
        <script src="js/bootstrap.bundle.js"></script>
    </body>
</html>
