<?php 
require 'config/conexion.php';

$db = new Database();
$connect = $db->connection();

$ok = false;

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$numero = $_POST['numero'];
$servicio = $_POST['servicio'];
$asunto = $_POST['asunto'];
$comentario = $_POST['comentario'];

$query = $connect -> prepare("INSERT INTO formulario (nombre, email, numero, servicio, asunto, comentario)
VALUES (:nom, :ema, :num, :ser, :asu, :com)");

$result = $query -> execute(array('nom' => $nombre, 'ema' => $email, 'num' => $numero, 'ser' => $servicio, 
'asu' => $asunto, 'com' => $comentario));

if($result){
    $ok = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Save</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body class="py-3">
    <main class="container">
        <div class="row">
            <div class="col">
                <?php if($ok){ ?>
                    <h3>Solicitud enviada</h3>
                <?php }else{ ?>
                    <h3>Error al enviar solicitud</h3>
                <?php } ?>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="index.php" class="btn btn-secondary">Regresar</a>
            </div>
        </div>
    </main>
</body>
</html>