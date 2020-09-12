<!DOCTYPE html>


<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>OK</title>
  </head>
  <body>
    <center>
    <?php
    if (htmlspecialchars($_POST['clave'])=="localhost") {
      // clave Correcta
      echo "Bienvenido! un momento";
      sleep(2);
      header('Location: files.php');
    } else {
      // clave incorrecta
      echo "Conexión rechazada por el servidor";
    }
     ?>

   <a href="index.php"> Regresar </a>
   </center>
  </body>
</html>
