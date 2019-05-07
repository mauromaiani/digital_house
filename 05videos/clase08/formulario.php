<?php







 ?>

 <!DOCTYPE html>
 <html lang="es" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Clase 08</title>
   </head>
   <body>
     <form action="php/registro.controller.php" method="POST" enctype="multipart/form-data">
        <fieldset>
          <legend>Registro de Usuario</legend>

            <div>
              <label for="nombre">Nombre</label>
              <input type="text" name="nombre" id="nombre" value="">
            </div>

            <div>
              <label for="apellido">Apellido</label>
              <input type="text" name="apellido" id="apellidp" value="">
            </div>

            <div>
              <label for="avatar">Avatar</label>
              <input type="file" name="avatar" id="avatar" value="">
            </div>

            <div>
              <input type="submit" name="enviador" value="Enviar">
            </div>


        </fieldset>
     </form>
   </body>
 </html>
