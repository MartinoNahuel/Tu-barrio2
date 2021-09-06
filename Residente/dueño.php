<?php
include("cn.php");
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Residente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="dueño.css">
</head>
<body>

    <div class="container container-fluid">
        
        <div class="card bg-secondary ">
            <form action="./validar.php" method="post">
            <!-- Username -->
            <div class="container-login">
            <div class="lote">
            <input type="number" name="Lote" required class="input-lote" placeholder="Lote N°">
        </div>
            <!-- Password -->
            <div class="contra">
            
            <input type="password" name="Contraseña" required class="input-contra" placeholder="Contraseña">
        </div>
        </div>
           <div class="botones1"><a href="./restablecer.html" class="restablecer">Restrablecer</a><a href="./registarse.html" class="registrarse">Registrarse</a></div>
            <div id="lower" class="ultimo">
          
                <button type="submit" class=" entrar btn btn-primary" name="entrar">Entrar</button>
             
   
            </div>
        </div>
        </form>  
             </div>
    
    
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>