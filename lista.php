<!--Juanjo Carrasco Rodríguez-->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/index.css">
    <title>Listado de imágenes</title>
  </head>
  <body>
    <?php

      // $ruta = 'E:\xampp\htdocs\ejercicios\DWES\imgserver\imagenes/';

      $ruta = 'C:\xampp\htdocs\ejercicios\imgserver\imagenes/';

      if(is_dir($ruta)){
        if(( $dh = opendir($ruta)) !== null ){
          while (($file = readdir($dh)) !== false){
            if ($file != "." && $file != "..")
              echo '<br/>Nombre: '.$file;
          }
        }
      }

      echo '<br/><br/><a href="index.html">Volver</a>';
    ?>
  </body>
</html>
