<?php
include('includes/utilerias.php');
if (empty($_POST)) {
    return;
}
$accion = $_POST['accion'];
$id = validar($_POST['id_encuesta']);
$titulo = validar($_POST['titulo_encuesta']);
$tipo = validar($_POST['tipo_encuesta']);
$inicio = validar($_POST['inicio']);
$fin = validar($_POST['fin']);
$cat = validar($_POST['categoria']);

$conexion = conectar();
if ($accion === 'insertar') {
    if ($id == '') {
        $sql = "insert into encuesta(titulo_encuesta, tipo, fecha_inicio, fecha_fin, categoria) values ('$titulo','$tipo','$inicio','$fin','$cat')";
    } else {
        $sql = "update encuesta set titulo_encuesta = '$titulo', tipo = '$tipo', fecha_inicio = '$inicio', fecha_fin = '$fin', categoria = '$cat' where id_encuesta = $id";
    }
}else if($accion === 'eliminar'){
    $sql = "delete from encuesta where id_encuesta = $id";
}else{
    $sql = 'select * from encuesta';
    header("refresh:0,url=encuestas.php");
}
$resultado = mysqli_query($conexion, $sql);
mysqli_close($conexion);
header("refresh:0,url=encuestas.php");
?>