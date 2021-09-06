<?php
$conexion=mysqli_connect("localhost", "root", "", "barrio privado");

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<body><div class="container-fluid">

<table id="titulo">
<caption>Solicitudes de acceso</caption></table>
     <form class="contenedor" method="post" >
        
 
<table id="tabla" >
    
    <tbody>


        <tr class="row justify-content-center w-100" >
            <th class="col-3">Nombre del responsable </th>
            <th class="col-2">Documento </th>
            <th class="col-3">Cantidad de personas </th>
            <th class="col-2">Comentario </td>
			<th class="col-2">Operacion</th>  
             </tr>

        
         <tr >
            <?php
         
      





        
           $query_2 ="SELECT * FROM  invitado WHERE Lote=$usuario"; 
          
            $resultado_2 =mysqli_query($conexion,$query_2);
             #$row_2 = mysqli_fetch_assoc($resultado_2); 
         while ($row_2 = mysqli_fetch_array($resultado_2)) {?>
   
            <td> <?php echo $row_2["Nombre_responsable"]; ?></td>
            <td> <?php echo $row_2["Documento"]; ?></td>
            <td> <?php echo $row_2["Cantidad_de_personas"]; ?></td>
            <td> <?php echo $row_2["Comentario"]; ?></td>
            <td> 
                <a href="./permitir_acceso.php?id=<?php echo $row_2['id_usuario']; ?>" class="per" name="permitir">Permitir acceso</a>
               
                /
                <a href="./eliminar_fila.php?id=<?php echo $row_2['id_usuario']; ?>" class="link">Eliminar</a>
            </td>
             </tr>
             <?php } mysqli_free_result($resultado_2);?>
          
             </tbody>
</table>

<script src="./confirmacion.js"></script>
<script>
  (function(){
    setInterval(
        function(){
            document.location.reload()
        },
        10000
    )
  })()
</script>
</body>
</html>