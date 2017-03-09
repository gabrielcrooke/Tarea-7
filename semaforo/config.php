<?php
if($_POST){

file_put_contents('config.txt', json_encode($_POST));

}
  $datos= json_decode(file_get_contents('config.txt'), 1);



 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Configuracion</title>
  </head>
  <body>
<form method= "post" action="">
Tiempo en verde: <input value= "<?php echo $datos['verde'] ?>" type= "text" name= "verde"/>
Tiempo en rojo: <input value= "<?php echo $datos['rojo'] ?>" type= "text" name= "rojo"/>
<button type="submit" >Guardar</button>
</form>
  </body>
</html>
