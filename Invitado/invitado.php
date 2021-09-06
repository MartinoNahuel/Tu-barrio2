<?php
include("con_db.php");

 if(isset($_POST['enviar'])){
 
    if(strlen($_POST['Nombre_responsable']) >= 1 && 
       strlen($_POST['Documento']) >= 1 && 
       strlen($_POST['Cantidad_de_personas']) >= 1 &&   
       strlen($_POST['Email']) >= 1 &&
       strlen($_POST['Nombre_residente']) >= 1 &&
       strlen($_POST['Lote']) >= 1 &&
       strlen($_POST['Comentario']) >= 1){

     $Nombre_responsable =  trim($_POST['Nombre_responsable']);
     $Documento = trim($_POST['Documento']);
     $Cantidad_de_personas =  trim($_POST['Cantidad_de_personas']);
     $Email =  trim($_POST['Email']);
     $Nombre_residente =  trim($_POST['Nombre_residente']);
     $Lote =  trim($_POST['Lote']);
     $Comentario =  trim($_POST['Comentario']); 

     $consulta = "INSERT INTO invitado(Nombre_responsable, Documento, Cantidad_de_personas, Email, Nombre_residente, Lote, Comentario) VALUES ('$Nombre_responsable','$Documento','$Cantidad_de_personas','$Email','$Nombre_residente','$Lote','$Comentario')";

     $resultado = mysqli_query($conexion,$consulta);
     
    

    if($resultado){
      echo '<script>
    alert("Su solicitud fue enviada");
    window.location = "invitado.html";</script>';
}
     else{
      echo '<script>
    alert("Error solicitud no enviada");
    window.location = "invitado.html";</script>';
}
    }

  }

    
 
 
       

       
      
mysqli_close($conexion);
?>