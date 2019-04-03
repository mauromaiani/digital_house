
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

        <?php
        // var_dump ($_GET);
        // echo "Hola";
        echo $_GET["nombre"];
        echo "<br>";
        foreach ($_GET as $key => $value) {
          echo "$key : $value <br>";
        }
        echo "<br>";
        echo $_POST["email"];
        echo "<br>";
        foreach ($_POST as $key => $value) {
          echo "$key : $value <br>";
        }

        foreach (getallheaders() as $key => $value) {
          echo "$key: $value\n";
}

        echo $_FILES;
        echo "<br>";
        echo $_REQUEST;
        echo "<br>";
        echo $_SESSION;
        echo "<br>";
        echo $_COOKIE;
        echo "<br>";
        echo $GLOBALS;
        echo "<br>";


         ?>

  </body>
</html>
