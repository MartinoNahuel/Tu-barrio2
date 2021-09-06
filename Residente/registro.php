<?php
include("con_db.php");

 if(isset($_POST['Registro'])){
 
    if(strlen($_POST['Email']) >= 1 && 
       strlen($_POST['Nombre']) >= 1 && 
       strlen($_POST['Lote']) >= 1 &&   
       strlen($_POST['Contraseña']) >= 1) {

     $Email =  trim($_POST['Email']);
     $Nombrecompleto = trim($_POST['Nombre']);
     $Lote =  trim($_POST['Lote']);
     $Contraseña =  trim($_POST['Contraseña']);

 #$destino= $Email;
 #$asunto ="Registro";
  #  $header = "Enviado desde de php";
   # $mensajecom = "EXITOSO";

   # mail($destino, $asunto, $mensajecom, $header);


   
   }
} 

     $consulta = "INSERT INTO residente(Email, Nombre, Lote, Contraseña) VALUES ('$Email','$Nombrecompleto','$Lote','$Contraseña')";

     
     $verificar_email = mysqli_query($conexion, "SELECT * FROM residente WHERE Email= '$Email' ");
     $verificar_lote = mysqli_query($conexion, "SELECT * FROM residente WHERE Lote= '$Lote' ");
   



     if (mysqli_num_rows($verificar_lote) > 0) {
      echo '
           <script>
           alert("Este lote ya tiene un usuario registrado, vuelve a intentarlo");
           window.location = "registarse.html";
           </script>
           ';
        exit();
     }
     if (mysqli_num_rows($verificar_email) > 0) {
      echo '
      <script>
      alert("Este email ya tiene un usuario registrado, vuelve a intentarlo");
      window.location = "registarse.html";
      </script>
      ';
   exit();
} else {
   echo '
       <script>
       alert("Registro exitoso");
       window.location = "dueño.html";
      
       </script>
       ';
}
    
  $resultado = mysqli_query($conexion,$consulta);

     
    
 
 
       

       
      
mysqli_close($conexion);
?>