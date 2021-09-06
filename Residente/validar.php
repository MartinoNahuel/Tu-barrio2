<?php
$conexion=mysqli_connect("localhost", "root", "", "barrio privado");
  $usuario=$_POST['Lote'];
  $contraseña=mysqli_real_escape_string($conexion,$_POST['Contraseña']);
  session_start();
  $_SESSION['Lote']=$usuario;

  
  $consulta="SELECT*FROM residente where Lote='$usuario' and contraseña='$contraseña' ";
  $resultado=mysqli_query($conexion,$consulta);

  $filas=mysqli_num_rows($resultado);
  if ($filas) {
include 'home_residente.php';

  } else{
    echo '
    <script>
    alert("Validacion incompleta,prueba nuevamente");
    window.location = "dueño.php";
    </script>';
      exit();
    
  }
?>



