<!--Juanjo Carrasco Rodríguez-->
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/index.css">
    <title>Guardar imagen</title>
  </head>
  <body>
    <?php

    // $ruta = 'E:\xampp\htdocs\ejercicios\DWES\imgserver\imagenes/';

    $ruta = 'C:\xampp\htdocs\ejercicios\imgserver\imagenes/'; //Ruta de la carpeta

    //Mover la imagen subida a la carpeta del servidor, manteniendo su nombre original
    move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta.basename($_FILES['imagen']['name']));


      //Recorrer el directorio y mostrar la imagen subida
      if(is_dir($ruta)){
        if(( $dh = opendir($ruta)) != null ){
          while (($file = readdir($dh)) != false){
            if (($file != "." && $file != "..")&&($file == $_FILES['imagen']['name'])){
              echo '<br/><h2>Imagen subida</h2>';
              echo '<br/>Nombre: '.$file.'<br/>'; //Nombre de la img
              echo '<br/><div><img src=imagenes/'.$file.'></img></div>'; //Mostrar la img
            }
          }
        }
      }

      echo '<br/><br/><a href="index.html">Volver</a>';

    ?>
  </body>
</html>
