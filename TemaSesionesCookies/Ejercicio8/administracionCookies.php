<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // Actualizar las cookies
        if ($_POST['accion'] == "actualizarCookies") {
          foreach ($_SESSION['diccionario'] as $espanol => $ingles) {
            setcookie($espanol, $ingles, time() + 365 * 24 * 3600);
          }
        }
        // Borrado de cookies y variables
        if ($_POST['accion'] == "borrarCookies") {
          foreach ($_SESSION['diccionario'] as $espanol) {
            setcookie($espanol, NULL, -1);
          }
          unset($_SESSION['diccionario']);
        }
        ?>
        <p>Ya se han realizado las modificaciones</p>
        <form action="index8.php" method="post">
          
          <input type="submit" name="accion"  value="Volver al principio">
        </form>
    </body>
</html>
