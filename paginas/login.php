<?php
    include('includes/utilerias.php');
    session_start();
    
    if(isset($_SESSION['usuario'])){
        redireccionar('La sesión ya está iniciada', 'index.php');
        die();
    }
    include('includes/encabezado.php');
?>

<div class="formulario-div">
    <form action="login-manejo.php" method = "post">
        <h3>Datos</h3>

        <label for="usuario" class="login-l">Usuario</label>
        <input type="text" name="usuario" id="usuario", required>

        <label for="password" class="login-l">Contraseña</label>
        <input type="password" name="password" id="password", required>

        <input type="submit" value="Entrar" class="boton">
    </form>
</div>

<?php
    include('includes/pie.php');
?>