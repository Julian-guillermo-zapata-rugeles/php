<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>imprimir Patron</title>
  </head>
  <body>
    <center>

      <fieldset style="background-color:orange;">
        <form action="" method="post" name="enviar">
        <label for="numero" style="color:white;"> Ingrese un numero para dibujar un triangulo </label> <input  style="margin:5px; width: 20%" type="number" name="numero" value="" placeholder="Ingrese un número Impar">
        <input type="submit" name="subir" value="Enviar">
         </form>


      </fieldset>
       <hr>
       <p style="color:orange;font-size:30px;">

    <fieldset>
      <?php
      if (isset($_POST['subir'])) {
        // code...
        imprimir();
      }
      function imprimir()
      {

        $numero=$_POST['numero'];
        if ($numero>150) {
          // code...
          echo "El numero es demaciado grande :D prueba uno menor";
          return;
        }
        for ($i=1; $i <= $numero ; $i+=2) {
          // code...
          $cadena="*";
          for ($j=1; $j<$i ; $j++) {
            // code...
            $cadena.="*";
          }
          echo "$cadena <br>";
        }
      }
       ?>
    </fieldset>
   </p>
  </body>
</html>
