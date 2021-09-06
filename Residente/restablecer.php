<?php
include("con_db.php");

$Lote=$_POST['Lote'];
$Email=$_POST['Email'];
$Contra_vieja=$_POST['Contra_vieja'];
$Contra_nueva=$_POST['Contra_nueva']; 





$verificar_contra = mysqli_query($conexion, "SELECT * FROM residente WHERE Contraseña= '$Contra_vieja' ");

$existe_lote = mysqli_query($conexion, "SELECT * FROM residente WHERE Lote ='$Lote'");

$consulta= mysqli_query($conexion," UPDATE residente SET Contraseña='$Contra_nueva' WHERE Lote= '$Lote'  AND Contraseña='$Contra_vieja'");

if (mysqli_num_rows($existe_lote) ) {


   
  
} else {
    echo '<script>alert("UPS! Lote NO encontrado");
    window.location = "restablecer.html";</script>';
    exit();

}

if (mysqli_num_rows($verificar_contra) > 0) {

  

} else {
    echo '<script>alert("UPS! contraseña mal introducida");
    window.location = "restablecer.html";</script>';
    exit();

}

if ($consulta) {
    # code...

echo '<script>
alert("Se restablecio la contraseña correctamente");
window.location = "restablecer.html";
</script>';
exit();
} else {
    echo '<script>
alert("ERROR");
window.location = "restablecer.html";
</script>';
exit();
}



mysqli_close($conexion);
?>