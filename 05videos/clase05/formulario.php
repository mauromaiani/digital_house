<?php







 ?>

 <!DOCTYPE html>
 <html lang="es" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Clase 05</title>
   </head>
   <body>
     <form action="procesar.php" method="POST">
        <fieldset>
          <legend>Registro de Usuario</legend>

            <div>
              <label for="nombre">Nombre</label>
              <input type="text" name="nombre" id="nombre" value="">
            </div>

            <div>
              <label for="email">Email</label>
              <input type="email" name="email" id="email" value="">
            </div>

            <div>
              <label for="password">Password</label>
              <input type="password" name="password" id="password" value="">
            </div>

            <div>
              <label for="pais">Pais</label>
              <select class="" name="pais">
                <option value="ARG">Argentina</option>
                <option value="CHI">Chile</option>
                <option value="UY">Uruguay</option>
              </select>
            </div>

            <div>
              <label for="">Categorias</label>
              <p> PHP <input type="checkbox" name="categorias[]" value="php"></p>
                <p> CSS <input type="checkbox" name="categorias[]" value="css"></p>
                  <p> HTML <input type="checkbox" name="categorias[]" value="html"></p>
            </div>

            <div>
              <input type="submit" name="boton" value="Enviar">
            </div>


        </fieldset>
     </form>
   </body>
 </html>
