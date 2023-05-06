<?php
include('includes/utilerias.php');
include('includes/encabezado.php');
?>

<div class="ver-encuestas">
    <?php
        $conexion = conectar();
        ver_encuestas('Guía I', $conexion);
        ver_encuestas('Guía II', $conexion);
        ver_encuestas('Guía III', $conexion);
        mysqli_close($conexion);
    ?>
</div>

<?php

    function ver_encuestas($tipo, $conexion){
        echo "<h1 class='separador' id='$tipo'>$tipo</h1>";
        echo "<div class='contenedor'>";

        
        $sql = "select * from encuesta where tipo = '$tipo'";
        $resultado = mysqli_query($conexion, $sql);

        if(mysqli_num_rows($resultado) > 0){
            while($renglon = mysqli_fetch_assoc($resultado)){
                $id = $renglon['id_encuesta'];
                $tipo = $renglon['tipo'];
                $encuesta = $renglon['titulo_encuesta'];
                $fechainicio = $renglon['fecha_inicio'];
                $fechafin = $renglon['fecha_fin'];
                $categoria = $renglon['categoria'];

                echo "<div class='encuestas'>
                    <h1 class='id' style='display:none'>$id</h1>
                    <h2 class='encuesta-nombre'>$encuesta</h2>
                    <h3 class='fechainicio'>$fechainicio</h3>
                    <h3 class='fechafin'>$fechafin</h3>
                    <p class='categoria'>$categoria</p>
                    <button class='contestar-encuesta'><a href='responder-encuesta.php?ide=$id'>Contestar</a></button>
                </div>";
            }
        } 
        echo "</div>";
    }

?>




</main>
</body>

</html>