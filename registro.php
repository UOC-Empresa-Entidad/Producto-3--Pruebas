<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>FrikiZone</title>
    <!-- CSS de Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Y si hace falta un archivo de estilos propio...
    <link href="css/estilos.css" rel="stylesheet"> -->
    <script src="js/validarForm.js"></script>
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
                          <a class="nav-link" href="index.html">Inicio</a> 
                      </li>
                      <li class="nav-item">
                      <a class="nav-link" href="categorias.html">Categorías</a>
                      </li>
                      <li class="nav-item">
                      <a class="nav-link" href="carro_compra.html"><img src="img/cart-4x_1.png" alt="carro de la compra"></a>
                      </li>
                      <li class="nav-item">
                      <a class="nav-link" href="contacto.php">Contacto</a>
                      </li>
<!-- El enlace a la administración no debe estar disponible en la pantalla de registro cuando aún no hemos abierto sesión.
                      <li class="nav-item">
                      <a class="nav-link" href="administracion.html">Administración</a>
                      </li>
-->
                    </ul>
                      
    </div>
    </nav>
  </div>

                   </div>
                   <div class="row mt2">
                   <div class="col-12 text-center">
                        <h1 id="formulario_registro">Formulario de Registro</h1>
                    </div>
                    </div>
                   <div class="row mt-2">
                      <div class="col-12">
                       <form name="fvalida" enctype="multipart/form-data" action="recogidaregistro.php" method="post" onsubmit="return validarForm()">
                         <div class="form-group col-centrar">
                               <input type="text" class="form-control" name="nombre_usuario" id="nombre_usuario" placeholder="Introduzca su nombre" required>
                              <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Introduzca sus apellidos" aria-describedby="namehelp" required>
                              <small id="namehelp" class="form-text text-muted">Su nombre y apellidos no serán visibles para el resto de usuarios.</small>
                              <input type="text" class="form-control" name="tipo_usuario" id="tipo_usuario" value="nosocio" hidden>
                           </div>
                        
                        
                             <div class="form-group">
                              <label for="calle">Dirección:</label>
                              <input type="text" class="form-control" name="calle" id="calle" placeholder="Introduzca el nombre de su calle" required>
                              <input type="text" class="form-control" name="numero" id="numero" placeholder="Número">
                              <input type="text" class="form-control" name="piso" id="piso" placeholder="Piso">
                              <input type="text" class="form-control" name="puerta" id="puerta" placeholder="Puerta">
                              <input type="text" class="form-control" name="provincia" id="provincia" placeholder="Provincia" required>
                              <input type="text" class="form-control" name="poblacion" id="poblacion" placeholder="Población" required>
                              <input type="text" class="form-control" name="cp" id="cp" placeholder="Código Postal" required>
                           </div>
                        
                        
                            <input type="tel" class="form-control" name="telefono" id="telefono" placeholder="Teléfono" required>
                            <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required>
                            <label for="foto">Foto:</label>
                            <input type="file" class="form-control" name="foto" id="foto">
                        
                        
                           <div class="form-group">
                            <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Introduzca su nombre de usuario" required>
                            <input type="password" class="form-control" name="password" name="password" id="password" placeholder="Introduzca su contraseña" required>
                            <input type="password" class="form-control" name="password2" id="password2" placeholder="Repita la contraseña" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Enviar</button><button type="reset" class="btn btn-warning ml-1">Limpiar</button>
                        </div>
                       </form>
                       </div>
                       </div>
        </div>
                                
        <script src="js/jquery-3.3.1.js"></script>
        <script src="js/bootstrap.bundle.js"></script>
    </body>
</html>
