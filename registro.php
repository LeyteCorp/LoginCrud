<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="utf-8">
    <title>َRegistro</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="plugins/sweet_alert2/sweetalert2.min.css">
  </head>
  <body style="background-image: url(img/portada1.jpg)">

<form id="formLogin2" class="box" action="procesos/registro.php" method="post">
  <h1>Registro</h1>
  <input type="text" name="nombre" id="nombre" placeholder="Name">
  <input type="text" name="apellidoP" id="apellidoP" placeholder="Last Name">
  <input type="email" name="email" id="email" placeholder="Email">
  
   <input type="text" name="usuario" id="usuario" placeholder="User name">
    <input type="password" name="password" id="password" placeholder="Password">
  <input type="submit" value="Registrar">
  <span class="text-footer" style="color:#fff">¿Ya tienes una cuenta? 
    <a href="index.php"style="color:#3498db">Login</a></span>
</form>
    
     <script src="librerias/jquery.min.js"></script>
    <script src="plugins/sweet_alert2/sweetalert2.all.min.js"></script>
    <script src="codigo.js"></script>

  </body>
</html>
