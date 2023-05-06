<?php
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@500&family=Pacifico&family=Patua+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/login.css">
    <!-- <link rel="stylesheet" href="../css/navbar.css"> -->
    <link rel="stylesheet" href="../css/agregar-usuario.css">
    <link rel="stylesheet" href="../css/formulario.css">
    <link rel="stylesheet" href="../css/encuestas.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/responder-encuesta.css">
    <link rel="stylesheet" href="../css/encuestas.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-..../...">
    <script src="../scripts/agregar-usuario.js" defer></script>
    <script src="../scripts/agregar-encuesta.js" defer></script>
    <title>NOM035</title>
</head>
<body>

    <!-- Navegación del la página -->
    
    <div class="nav-contenedor">
        <nav>
            <div class="logo">
                <img src="../imagenes/logo.png" class="imglogo">
                <h2>HOTELYSTICS</h2>
            </div>
            <h2 id="menu-boton">&#9776;</h2>
            <ul id="menu">
                <?php
                    if(isset($_SESSION['usuario'])){
                        if($_SESSION['tipo'] == 'admin'){
                            echo '<li><a href="index.php">Inicio</a></li>';
                            echo '<li><a href="encuestas.php">Encuestas</a></li>';
                            echo '<li><a href="gestion-usuario.php">Usuarios</a></li>';
                            echo '<li><a href="#">Acerca De</a></li>';
                            echo '<li><a href="salir.php">Salir</a></li>';
                        }else{
                            echo '<li><a href="index.php">Inicio</a></li>';
                            echo '<li><a href="encuesta-empleado.php">Responder Encuesta</a></li>';
                            echo '<li><a href="#">Acerca De</a></li>';
                            echo '<li><a href="salir.php">Salir</a></li>';
                        }
                        
                    }
                ?>
                                           
            </ul>
        </nav>
    </div>
   
    <!-- Fin navegación -->