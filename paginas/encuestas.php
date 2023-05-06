<?php
include('includes/utilerias.php');
include('includes/encabezado.php');
?>
<div class="agregar-fondo" id="fondo-encuesta">
  <div class="agregar-ventana">
    <h1>Encuesta</h1>
    <div class="formulario-agregar">
      <form action="agregar-encuesta.php" method="post">
        <input type="hidden" id="id_encuesta" name="id_encuesta"> 
        <label for="titulo">Titulo Encuesta</label>
        <input type="text" id="titulo" name="titulo_encuesta" required>
        <label for="fecha-inicio">Fecha Inicio</label>
        <input type="date" id="fecha-inicio" name="inicio" required>
        <label for="fecha-fin">Fecha Fin</label>
        <input type="date" id="fecha-fin" name="fin" required>
        <label for="cat">Categoria</label>
        <input type="text" id="cat" name="categoria" required>
        <label for="tipo">Tipo</label>
        <select name="tipo_encuesta" id="tipo">
          <option value="Guía I">Guía I</option>
          <option value="Guía II">Guía II</option>
          <option value="Guía III">Guía III</option>
        </select>
        <div class="botones-div">
        <button class="guardar" type="submit" name="accion" value="insertar">Guardar</button>
          <button class="cancelar" type="submit" name="accion" value="cancelar">Cancelar</button>
          <button class="cancelar" type="submit" name="accion" value="eliminar">Eliminar</button>         
        </div>
      </form>
    </div>
  </div>
</div> 


<div class="ver-encuestas">
    <button class="btn-encuesta"><i class="fas fa-plus"></i> Añadir Encuesta</button>
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
                    <h1 class='tipo' style='display:none'>$tipo</h1>
                    <button class='mod'>Modificar</button>
                    <button class='ver-encuesta'>Ver más</button>
                </div>";
            }
        } 
        echo "</div>";
    }

?>




</main>
</body>

</html>