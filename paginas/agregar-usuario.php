<?php
include('includes/utilerias.php');
if (empty($_POST)) {
    return;
}
$accion = $_POST['accion'];
$id = validar($_POST['id_usuario']);
$nombre = validar($_POST['nombre_usuario']);
$contraseña = validar($_POST['contraseña_usuario']);
$tipo = validar($_POST['tipo_usuario']);
$puesto = validar($_POST['puesto_usuario']);
$fecha = validar($_POST['fecha_usuario']);

$conexion = conectar();
if ($accion === 'insertar') {
    if ($id == '') {
        $sql = "insert into usuario(nombre_usuario,contrasena,tipo,puesto,fecha_inicio_puesto) values ('$nombre','$contraseña','$tipo','$puesto','$fecha')";
    } else {
        $sql = "update usuario set nombre_usuario = '$nombre',contrasena = '$contraseña',tipo = '$tipo',puesto = '$puesto',fecha_inicio_puesto = '$fecha' where id_usuario = '$id'";
    }
}else if($accion === 'eliminar'){
    $sql = "delete from usuario where id_usuario = '$id'";
}else{
    $sql = 'select * from usuario';
    header("refresh:0,url=gestion-usuario.php");
}
$resultado = mysqli_query($conexion, $sql);
mysqli_close($conexion);
header("refresh:0,url=gestion-usuario.php");
?>