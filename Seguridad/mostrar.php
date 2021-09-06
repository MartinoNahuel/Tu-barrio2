<?php 
$conexion=mysqli_connect("localhost", "root", "", "barrio privado");



$salida = "";
$query ="SELECT * FROM ingreso ";

if(isset($_POST['consulta'])){

	// $busqueda = $_POST['busqueda'];
	$q = $conexion->real_escape_string($_POST['consulta']);
	$query = "SELECT * FROM ingreso  WHERE Documento LIKE '$q%'";
}
// WHERE Nombre_responsable LIKE '%'
$resultado = $conexion->query($query);

if($resultado->num_rows > 0){
	$salida.="
	<table table='tabla'>
    <thead>
        <tr>
            <td>Nombre del responsable </td>
            <td>Documento </td>
            <td>Cantidad de personas </td>
            <td>Lote</td>
            <td>Comentario</td>
        </tr>
    </thead>
    <tbody>";

	while($fila = $resultado -> fetch_array()){

		$salida.= "<tr>
		<td>".$fila['Nombre_responsable']."</td>
		<td>".$fila['Documento']."</td>
		<td>".$fila['Cantidad_de_personas']."</td>

	
		<td>".$fila['Lote']."</td>
		<td>".$fila['Comentario']."</td>
	</tr>";
	}
	$salida.="</tbody></table>";
} else{

	$salida.= "No hay datos";
}
echo $salida;

?>