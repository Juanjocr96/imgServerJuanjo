<!--Juanjo Carrasco Rodríguez-->
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/index.css">
    <title>Galería de fotos</title>
  </head>
  <body>
    <h2>Galería de fotos</h2>
    <?php
    // $ruta = 'E:\xampp\htdocs\ejercicios\DWES\imgserver\imagenes/';

    $ruta = 'C:\xampp\htdocs\ejercicios\imgserver\imagenes/';

      if(is_dir($ruta)){
        if(( $dh = opendir($ruta)) !== null ){
          while (($file = readdir($dh)) !== false){
            if ($file != "." && $file != "..")
              echo '<br/><div><img src=imagenes/'.$file.'></img></div>';
          }
        }
      }

      echo '<br/><br/><a href="index.html">Volver</a>';
    ?>
  </body>
</html>
