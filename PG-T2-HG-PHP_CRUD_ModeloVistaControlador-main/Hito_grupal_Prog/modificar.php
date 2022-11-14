<!DOCTYPE html>
<html lang="en">
<head>

     <title>Hito Grupal</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/aos.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-gymso-style.css">
<!--
Tooplate 2119 Gymso Fitness
https://www.tooplate.com/view/2119-gymso-fitness
-->
</head>
<body>
    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">Bienvenido</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link smoothScroll">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="show.php" class="nav-link smoothScroll">Mostrar</a>
                    </li>
                    <li class="nav-item">
                        <a href="eliminar.php" class="nav-link smoothScroll">Eliminar</a>
                    </li>
                    <li class="nav-item">
                        <a href="modificar.php" class="nav-link smoothScroll">Modificar</a>
                    </li>

                </ul>
            </div>
        </div>
</nav>

<!-- BODY -->
    <hr>
    <br>
    <h1>Modificar</h1>
    <form action="mod.php" method="post">
    <label for="titulo">Id</label>
        <input type="text" name="id" id="" placeholder="Ingresa el id de la noticia a cambiar">
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" id="" placeholder="Ingresa el titulo">
        <label for="titulo">Contenido</label>
        <input type="text" name="contenido" id="" placeholder="Ingresa el contenido">
        <label for="titulo">Imagen</label>
        <input type="text" name="imagen" id="" placeholder="Ingresa la imagen">
        <label for="titulo">Fecha</label>
        <input type="date" name="fecha" id="" placeholder="Ingresa la imagen">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>