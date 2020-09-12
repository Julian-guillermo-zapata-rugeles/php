<!--
Este script lista automaticamente nuestros archivos en el directorio
y los presenta en el localhost

-->


<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
  <meta charset="utf-8">
  <title>Repository</title>
  </head>
  <body>
    <ol>
      <left>
        <?php
          //Listar archivos.
            $Lista_Archivos = glob('*');
              foreach($Lista_Archivos as $filename){
                //Mostrar archivos
            echo  "<li> Online <a href='$filename'> $filename</a> </li>";
          }
?>
</ol>
  </body>
</html>
