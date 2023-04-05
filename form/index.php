<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no,
    initial-scale=1, maximun-scale=1, minimun-scale=1">
    <title>Form</title>
    <link rel="stylesheet" href="main.css">
  </head>
  <body>
    
  <form method="post" action="email.php">
    <h2> Formulario de contacto </h2>
    <p> Nombre: <br>
    <input type="text" name="name" required></p>
    <p> Correo electrónico: <br>
    <input type="email" name="email" required></p>
    <p> Comentarios: <br>
    <textarea name="comment" id="" cols="30" rows="10" required></textarea></p>
    <p class="center"><input type="submit" value="Enviar correo"></p>
  </form>

  </body>
</html>