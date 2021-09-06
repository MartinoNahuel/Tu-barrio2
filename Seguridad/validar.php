<link rel="stylesheet" href="error.css">
<?php

    $usuario=$_POST['usuario'];
    $contraseña=$_POST['contraseña'];
    session_start();
    $_SESSION['usuario']=$usuario;

    $conexion=mysqli_connect("localhost", "root", "", "barrio privado");


    $consulta="SELECT*FROM seguridad WHERE usuario='$usuario' AND contraseña='$contraseña' ";
    $resultado=mysqli_query($conexion,$consulta);

    $filas=mysqli_num_rows($resultado);

    if($filas){
        header("location:home_seguridad.php");

    }
    else{
        echo '<script>alert("UPS! contraseña mal introducida");
        window.location = "vigilancia.html";</script>';
        exit();
        
      
    }

mysqli_free_result($resultado);
mysqli_close($conexion);
