<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-Seguridad</title>
    <link rel="stylesheet" href="./home_seguridad.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>
<body>
    <div class="container-fluid">
<h1>Peticiones de ingreso</h1>
<input type="text" name="caja_busqueda" id="caja_busqueda">
<div id="datos">
   
</div>






<script src="./jquery-3.6.0.min.js"></script>
<script src="./buscador.js" ></script>
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