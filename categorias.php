<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FrikiZone</title>
    <!-- CSS de Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Archivo css propio-->
    <link href="css/estilos_categorias.css" rel="stylesheet">
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
                      <li class="nav-item active">
                      <a class="nav-link" href="categorias.php">Categorías <span class="sr-only">(current)</span></a>
                      </li>

                      <li class="nav-item">
                      <a class="nav-link" href="carro_compra.php"><img src="img/cart-4x_1.png" alt="carro de la compra"></a>
                      </li>
                      <li class="nav-item">
                      <a class="nav-link" href="contacto.php">Contacto</a>
                      </li>
                      <li class="nav-item">
                      <a class="nav-link" href="administracion.php">Administración</a>
                      </li>
                    </ul>
                      <form class="form-inline my-2 my-lg-0">
                       <button type="button" name="registro" class="btn btn-outline-warning mx-4" onclick="location.href='registro.php'">Registrarse</button>
                       <button type="button" name="login" class="btn btn-outline-success" onclick="location.href='login.php'">Iniciar Sesión</button>
                    </form>
                      
    </div>
    </nav>
  </div>

                   </div>
                  
                       
                       
        <h1><br>CATEGORÍAS</h1>
                       
                   <div id="categorias">
                   	
                   	
                   	<a href="lista_comics.html" style="text-decoration: none"><p><img src="img/boton_verde.jpg" width="25" height="25"/>&nbsp &nbsp COMICS</p></a><br>
                   	<a href="lista_juegosmesa.html" style="text-decoration: none"><p><img src="img/boton_verde.jpg" width="25" height="25"/>&nbsp &nbsp JUEGOS DE MESA</p></a><br>
                   	<a href="lista_merchandising.html" style="text-decoration: none"><p><img src="img/boton_verde.jpg" width="25" height="25"/>&nbsp &nbsp MERCHANDISING</p></a>
                   	
                   </div>
                       
                   
                   
                   
            </div>                    
        <script src="js/jquery-3.3.1.js"></script>
        <script src="js/bootstrap.bundle.js"></script>
    </body>
</html>