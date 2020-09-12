<!--
julian zapata rugeles
Este es un loggin con autenticación en php
2020
-->

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" href="css/login.css">
    <title>Bienvenido</title>
  </head>
  <body>
    <center>
      <h3>Bienvenido al localhost</h3>
    <fieldset>
      <center>
      <form class="loggin" action="validar.php" method="post">
        <input type="password" name="clave" value="" placeholder="clave"><br>
        <input  class="btn_login" type="submit" name="validar" value="Ingresar">
      </center>
      </form>
    </center>
    </fieldset>
  </body>
</html>
