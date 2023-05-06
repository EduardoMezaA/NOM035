<?php
include('includes/utilerias.php');
include('includes/encabezado.php');
?>

<div class="agregar-fondo" id="fondo-usuario">
  <div class="agregar-ventana">
    <h1>Usuario</h1>
    <div class="formulario-agregar">
      <form action="agregar-usuario.php" method="post">
        <input type="hidden" id="id_usuario" name="id_usuario"> 
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre_usuario" required>
        <label for="contraseña">Contraseña</label>
        <input type="password" id="contraseña" name="contraseña_usuario" required>
        <label for="puesto">Puesto</label>
        <input type="text" id="puesto" name="puesto_usuario" required>
        <label for="fecha_ini">Fecha de inicio</label>
        <input type="date" id="fecha_ini" name="fecha_usuario" required>
        <label for="tipo">Tipo</label>
        <select name="tipo_usuario" id="tipo" >
          <option value="admin">admin</option>
          <option value="empleado">empleado</option>
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

<div class="buscar">
  <button class="btn-usuario"><i class="fas fa-plus"></i> Añadir usuario</button>
  <form class="buscar-form" method="post" action="gestion-usuario.php">
    <label for="busqueda">Buscar:</label>
    <input type="text" id="busqueda" name="user">
    <button type="submit"><i class="fas fa-search"></i></button>
  </form>
</div>

<?php

?>

<div class="tabla-usuarios">
  <table class="user-table">
    <thead>
      <tr>
        <th style="display:none">id</th>
        <th>Nombre</th>
        <th>Contraseña</th>
        <th>Puesto</th>
        <th>Fecha de inicio</th>
        <th>Tipo</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $conexion = conectar();
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $busqueda = $_POST['user'];
        $sql = "SELECT * FROM usuario WHERE nombre_usuario LIKE '%$busqueda%' OR puesto LIKE '%$busqueda%' OR tipo LIKE '%$busqueda%';";
      } else {
        $sql = "select * from usuario order by id_usuario desc limit 10";
      }
      ver_usuarios($sql, $conexion);
      mysqli_close($conexion);
      ?>
    </tbody>
  </table>
</div>
<?php
function ver_usuarios($sql, $conexion)
{
  $resultado = mysqli_query($conexion, $sql);
  if (mysqli_num_rows($resultado) > 0) {
    while ($renglon = mysqli_fetch_assoc($resultado)) {
      $id = $renglon['id_usuario'];
      $nombre = $renglon['nombre_usuario'];
      $contraseña = $renglon['contrasena'];
      $tipo = $renglon['tipo'];
      $puesto = $renglon['puesto'];
      $fechaini = $renglon['fecha_inicio_puesto'];

      echo "<tr>
        <td style='display:none'>$id</td>
        <td>$nombre</td>
        <td>$contraseña</td>
        <td>$puesto</td>
        <td>$fechaini</td>
        <td>$tipo</td>
        </tr>";
    }
  }
}
?>

</main>
</body>

</html>