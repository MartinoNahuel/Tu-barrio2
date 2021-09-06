<?php
include("cn.php");
$id = $_GET['id'];

$eliminar = "DELETE FROM invitado WHERE id_usuario = $id";
$resultado = mysqli_query($conexion,$eliminar);

if ($resultado) {

    header('Location: dueño.php');
   exit();
} else {
    echo '<script>
    alert("No se pudo eliminar la fila");
    window.location = "dueño.php";</script>';
}
?>

<script src="./confirmacion.js"></script>