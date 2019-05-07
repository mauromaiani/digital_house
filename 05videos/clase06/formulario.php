<?php







 ?>

 <!DOCTYPE html>
 <html lang="es" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Clase 06</title>
   </head>
   <body>
     <form action="php/contacto.controller.php" method="POST">
        <fieldset>
          <legend>Registro de Usuario</legend>

            <div>
              <label for="nombre">Nombre</label>
              <input type="text" name="nombre" id="nombre" placeholder="Nombre">
            </div>

            <div>
              <label for="email">Email</label>
              <input type="email" name="email" id="email" placeholder="Email">
            </div>

            <div>
              <label>Edad</label>
              <input type="number" name="edad" placeholder="Edad">
            </div>

            <!-- <div>
              <label for="pais">Pais</label>
              <select class="" name="pais">
                <option value="ARG">Argentina</option>
                <option value="CHI">Chile</option>
                <option value="UY">Uruguay</option>
              </select>
            </div> -->

            <!-- <div>
              <label for="">Categorias</label>
              <p> PHP <input type="checkbox" name="categorias[]" value="php"></p>
                <p> CSS <input type="checkbox" name="categorias[]" value="css"></p>
                  <p> HTML <input type="checkbox" name="categorias[]" value="html"></p>
            </div> -->

            <div>
              <label>Mensaje</label><br>
              <textarea name="mensaje" rows="5" cols="80" placeholder="Mensaje"></textarea>
            </div>


            <div>
              <button type="submit" name="enviador" >Enviar</button>
            </div>


        </fieldset>
     </form>
   </body>
 </html>
