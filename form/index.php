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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="style.css" rel="stylesheet" type="text/css">
    <script src="test.js" type="text/javascript"></script>
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
          <div class="col-md-5">
            <i class='bx bxs-plus-circle bx-sm btn btn-primary' id="agregar" onclick="servicio();"></i>
          </div>
          <br>
          <div class="col-md-5">
            <div class="form-row clonar py-1" >
              <select class="form-select" id="servicio" name="servicio[]" required>
                <option value="">Seleccionar servicio</option>
                <option value="Cotizar isapre">Cotizar isapre</option>
                <option value="Cotizar seguros de salud">Cotizar seguros de salud</option>
                <option value="Cotizar seguros de vida">Cotizar seguros de vida</option>
                <option value="Cotizar seguros generales">Cotizar seguros generales</option>
                <option value="Cotizar seguros complementarios">Cotizar seguros complementarios</option>
                <option value="Cotizar seguros con ahorro y APV">Cotizar seguros con ahorro y APV</option>
              </select>
              <i class="bx bx-trash bx-xs btn btn-danger puntero ocultar"></i>
            </div>
            <div id="contenedor"></div>
          </div>
          <script>
    let agregar = document.getElementById('agregar');
    let contenido = document.getElementById('contenedor');

    agregar.addEventListener('click', e =>{
        e.preventDefault();

        let clonado = document.querySelector('.clonar');
        let clon = clonado.cloneNode(true);

        contenido.appendChild(clon).classList.remove('.clonar')

        let remover = contenido.lastChild.childNodes[1].querySelectorAll('i');
        remover[0].classList.remove('ocultar');
    });
          </script>
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