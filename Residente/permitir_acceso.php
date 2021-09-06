<?php
  $conexion=mysqli_connect("localhost", "root", "", "barrio privado");

$id = $_GET['id'];

$permitir = "INSERT INTO ingreso(Nombre_responsable, Documento, Cantidad_de_personas, Lote, Comentario) SELECT Nombre_responsable, Documento, Cantidad_de_personas, Lote, Comentario FROM invitado   WHERE id_usuario = $id";
$resultado = mysqli_query($conexion,$permitir);


$eliminar = "DELETE FROM invitado WHERE id_usuario = $id";
$resultado_2 = mysqli_query($conexion,$eliminar);

if ($resultado_2) {
  header('Location: dueño.php');
    exit();
} else {
    echo '<script>
    alert("ERROR");
    window.location = "dueño.php";</script>';
}