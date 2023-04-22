<?php
require 'config/conexion.php';

$db = new Database();
$connect = $db->connection();
$query = $connect->query("SELECT id, nombre, email, numero, servicio , asunto, comentario FROM formulario ORDER BY id ASC");
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <link rel="stylesheet" href="style.css">
    <script src="javascript.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1, maximun-scale=1, minimun-scale=1">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body class="py-5">
    <main class="container">

      <div class="row">
        <div class="col">
        <h2 id="title"> Formulario de contacto </h2>          
        </div>
      </div>

      <div class="row">
        <div class="col">
        <form method="POST" action="save.php" id="form">
          
        <br>
          <div class="col-md-5">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required autofocus>
          </div>
        <br>
          <div class="col-md-5">
            <label for="email" class="form-label">Correo electronico</label>
            <input type="text" name="email" id="email" class="form-control" required>            
          </div>
        <br>
          <div class="col-md-5">
            <label for="number" class="form-label">Número de contacto</label>
            <input type="number" name="numero" id="numero" class="form-control" required>
          </div>
        <br>
            <div class="row">
                <div class="col-md-5">
                    <i class='bx bxs-plus-circle bx-xs btn btn-primary' id="agregar" onclick="clonar1()"></i>
                </div>
            </div>
        <br>
          <div class="row">
            <div class="col-md-5">
              <div class="form-row py-1 clonar" >
                <div class="form-group col-md-12 seleccionar1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16"> <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/> </svg>
                  <select class="form-select" name="select[]" required>
                    <option value="">Seleccionar servicio </option>
                    <option value="Cotizar isapre">Cotizar isapre</option>
                    <option value="Cotizar seguros de salud">Cotizar seguros de salud</option>
                    <option value="Cotizar seguros de vida">Cotizar seguros de vida</option>
                    <option value="Cotizar seguros generales">Cotizar seguros generales</option>
                    <option value="Cotizar seguros complementarios">Cotizar seguros complementarios</option>
                    <option value="Cotizar seguros con ahorro y APV">Cotizar seguros con ahorro y APV</option>
                  </select>
                  
                   <div class="ocultar">
                      <i class="bx bx-trash bx-xs btn btn-danger " onclick="borrar(0)"></i>
                   </div>
                </div>
              </div>
            </div>
          </div>
        <br>
          <div class="col-md-5">
            <label for="issue" class="form-label">Asunto</label>
            <input type="text" name="asunto" id="asunto" class="form-control" required>
          </div>
        <br>
          <div class="col-md-5">
            <label for="comment" class="form-label">Comentarios</label>
            <textarea name="comentario" id="comentario" cols="10" rows="5" class="form-control" required></textarea>
          </div>
        <br>
          <div class="col-md-5">
          <button type="submit" class="btn btn-primary" name="button" id="button" onclick="show();">Enviar</button>
          </div>
      </form>
        <br>
        <div class="row py-3" id="hidde">
            <div class="col">
                <table class="table table-border">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Correo electronico</th>
                            <th>Número de contacto</th>
                            <th>Servicio</th>
                            <th>Asunto</th>
                            <th>Comentario</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach($result AS $res){
                        ?>
                        <tr>
                            <td><?php echo $res['id'] ?></td>
                            <td><?php echo $res['nombre'] ?></td>
                            <td><?php echo $res['email'] ?></td>
                            <td><?php echo $res['numero'] ?></td>
                            <td><?php echo $res['servicio'] ?></td>
                            <td><?php echo $res['asunto'] ?></td>
                            <td><?php echo $res['comentario'] ?></td>
                            <td><a href="delete.php?id=<?php echo $res['id'] ?>" class="btn btn-danger">Eliminar</a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
  <br>
</body>
</html>