<?php
require_once("autoload.php");
if ($_POST){
  $usuario = new Usuario($_POST["nombre"],$_POST["email"],$_POST["password"]);
  //$passwordEncriptado = password_hash($usuario->getPassword(),PASSWORD_DEFAULT);
  //dd($passwordEncriptado);
  $errores = $validar->validacionUsuario($usuario, $_POST["repassword"]);
  if(count($errores)==0){
    $registroUsuario = $registro->armarUsuario($usuario);
    $json->guardar($registroUsuario);
    dd("FIN");
  }
}


/*
include_once("controladores/funciones.php");
if ($_POST){
  $errores=validar($_POST,"registro");
  if(count($errores)==0){
    $usuario = buscarEmail($_POST["email"]);
    if($usuario !== null){
      $errores["email"]="Usuario ya registrado";
    }else{
      $avatar = armarAvatar($_FILES);
      $registro = armarRegistro($_POST,$avatar);
      guardarUsuario($registro);
      header("location:login.php");
      exit;
    }  

  }
}*/

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="master.css">
  <title>Registro de Datos</title>
</head>

<body>
  <div class="container">
    <?php
      if(isset($errores)):?>
        <ul class="alert alert-danger">
          <?php
          foreach ($errores as $key => $value) :?>
            <li> <?=$value;?> </li>
            <?php endforeach;?>
        </ul>
      <?php endif;?>

  
    <section class="row  text-center ">
      <article class="col-12  " >
          <h2>Formulario de registro de datos</h2>
          <form action="" method="POST" enctype= "multipart/form-data"  >
            <label> Usuario:</label>
            
            <input name="nombre" type="text" id="nombre"  value="<?=(isset($errores["nombre"]) )? "" : inputUsuario("nombre");?>" placeholder="Nombre de usuario..." />
            <br>
            
            <label>Email:</label>
          
            <input name="email" type="text" id="email" value="<?=isset($errores["email"])? "":inputUsuario("email") ;?>" placeholder="Correo electrónico"/>
            <br>
            <label>Contraseña:</label>
          
            <input name="password" type="password" id="password" value="" placeholder="Contraseña..." />
            <br>
            <label>Confirmar contraseña:</label>
            
            <input name="repassword" type="password" id="repassword" value="" placeholder="Rectifique su contraseña" />
            <br>
            <button class="btn-buttom btn-primary" type="submit">Enviar</button>
            
            <button  class="btn-buttom btn-success" type="reset">Restablecer</button>
          </form>
        
      </article> 
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </div>
</body>

</html>
