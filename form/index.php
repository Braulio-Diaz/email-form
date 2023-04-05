<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no,
    initial-scale=1, maximun-scale=1, minimun-scale=1">
    <title>Form</title>
    <link rel="stylesheet" href="main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    
  <form method="post" action="email.php">
    <h2> Formulario de contacto </h2>
    <div class="form-group">
    <label for="formGroupExampleInput">Nombre</label>
    <input type="text" name="name" class="form-control" id="name" placeholder="" required>
  </div>
  <br>
  <div class="form-group">
    <label for="formGroupExampleInput2">Correo electronico</label>
    <input type="text" name="email" class="form-control" id="email" placeholder="" required>
  </div>
  <br>
  <div class="form-group">
    <label for="formGroupExampleInput2">Número de teléfono</label>
    <input type="number" name="number" class="form-control" id="number" placeholder="" required>
  </div>
  <br>
    <div class="form-group">
      <label for="my-select"></label>
      <select class="form-select" id="my-select" name="select" id="select" required>
        <option value="">Seleccione una opción</option>
        <option value="Cotizar isapre">Cotizar isapre</option>
        <option value="Cotizar seguros de salud">Cotizar segurs de salud</option>
        <option value="Cotizar seguros de vida">Cotizar seguros de vida</option>
        <option value="Cotizar seguros generales">Cotizar seguros generales</option>
        <option value="Cotizar seguros complementarios">Cotizar seguros complementarios</option>
        <option value="Cotizar seguros con ahorro y APV">Cotizar seguros con ahorro y APV</option>
      </select>
    </div>
    <br>
    <div class="form-group">
    <label for="formGroupExampleInput2">Asunto</label>
    <input type="text" name="issue" id="issue" class="form-control" placeholder="" required>
  </div>
  <br>
    <div class="form-group">
      <label for="my-textarea">Comentarios</label>
      <textarea id="comment" class="form-control" name="comment" cols="10" rows="5" required></textarea>
    </div>
    <br>
    <button type="submit" name="button" id="button" class="btn btn-primary" href="#" role="button">Agregar servicio</a>
  </form>
</body>
</html>