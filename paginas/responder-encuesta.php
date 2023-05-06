<?php
include('includes/utilerias.php');
include('includes/encabezado.php');
?>

<div class="ventana-responder">
<form method="post" action="resultados.php">
		<table>
			<tr>
				<th style="display:none">Número de pregunta</th>
				<th>Pregunta</th>
				<th>Opciones</th>
			</tr>
			<?php
				$conexion = conectar();
				$id = $_GET['ide'];
				ver_preguntas($conexion,$id);
				mysqli_close($conexion);
			?>
		</table>
		<input type="submit" value="Enviar" class="btn-responder">
	</form>
</div>
<?php
function ver_preguntas($conexion,$id){
	$sql = "select * from pregunta where id_encuesta = $id";
	$resultado = mysqli_query($conexion,$sql);
	if (mysqli_num_rows($resultado) > 0) {
		while ($renglon = mysqli_fetch_assoc($resultado)) {
			$id = $renglon['id_pregunta'];
			$pregunta = $renglon['texto_pregunta'];

			echo "<tr>
			<td style='display:none'>$id</td>
			<td style='width:700px'>$pregunta</td>
			<td style='width:500px'>
				<input type='radio' name='$id' value='1'>Nunca
				<input type='radio' name='$id' value='2'>Casi nunca
				<input type='radio' name='$id' value='3'>Algunas veces
				<input type='radio' name='$id' value='4'>Casi siempre
				<input type='radio' name='$id' value='5'>Siempre
			</td>
		</tr>";
		}
	}
}
?>

</main>
</body>
</html>