<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="utf-8">
    <title>َLogin</title>
    <?php 
		session_start();
		if (isset($_SESSION['usuario'])) {
			header("location:vistas/inicio.php");
		}
	?>
   
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="plugins/sweet_alert2/sweetalert2.min.css">
  </head>
  <body style="background-image: url(img/portada1.jpg)">

    <form id="formLogin" class="box" action="procesos/login.php" method="post">
      <h1>Login</h1>
      <input type="text" name="usuario" id="usuario" placeholder="Username" >
      <input type="password" name="password" id="password" placeholder="Password">
       <input type="submit" name="submit" value="Login">
      <span class="text-footer" style="color:#fff">¿Aun no te has registrado? 
        <a href="registro.php"style="color:#3498db">Registrate</a></span>
    </form>
    
    <script src="librerias/jquery.min.js"></script>
    <script src="plugins/sweet_alert2/sweetalert2.all.min.js"></script>
    <script src="codigo.js"></script>
  </body>
</html>

