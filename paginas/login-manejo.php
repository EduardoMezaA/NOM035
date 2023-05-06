<?php

    include('includes/utilerias.php');

    /*
    if(isset($_POST['usuario']) && isset($_POST['password'])){
        
    }
    */
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    //conectar a la BD
    $conexion = conectar();

    // Consulta para buscar el usuario y la contraseña en la base de datos
    $sql = "SELECT nombre_usuario, tipo FROM usuario WHERE nombre_usuario='$usuario' AND contrasena='$password'";
    $result = $conexion->query($sql);

    // Verificar si el usuario y la contraseña son válidos
    if ($result->num_rows == 1) {
        // Usuario y contraseña válidos, iniciar sesión
        /*
        redireccionar('Bienvenido Administrador','index.php');
        $_SESSION['usuario'] = $usuario;
        */
        redireccionar('Bienvenido '.$usuario,'index.php');
        $row = $result->fetch_assoc();
        $_SESSION['usuario'] = $row['nombre_usuario'];
        $_SESSION['tipo'] = $row['tipo'];
        
    } else {
        // Usuario o contraseña inválidos, mostrar un mensaje de error
        redireccionar('Datos Incorrectos','login.php');
    }

?>