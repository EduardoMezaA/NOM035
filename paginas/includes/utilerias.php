<?php
    function redireccionar($mensaje, $dir){
        include('includes/encabezado.php');
        echo '<div class="formulario-div" style="color:white; font-size: 1.5rem;">';
        echo '<h1 style="text-align:center">' . $mensaje . '</h1>';
        echo '<h4 style="text-align:center"> Redireccionando... </h4>';
        echo '</div>';
        include('includes/pie.php');
        header('refresh:3,url=' . $dir);
    }

    function validar($texto){
        $texto = trim($texto);
        $texto = stripslashes($texto);
        $texto = htmlspecialchars($texto);
        return $texto;
    }

    function conectar(){
        DEFINE('SERVIDOR', 'localhost');
        DEFINE('USUARIO', 'root');
        DEFINE('PASSWORD', '');
        DEFINE('BD', 'nom035');

        $resultado = mysqli_connect(SERVIDOR, USUARIO, PASSWORD, BD);

        return $resultado;
    }

?>