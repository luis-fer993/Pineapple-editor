<?php

if (isset($_REQUEST["enviar"])){
    $para = $_POST["correo"];
    $asunto = $_POST["asunto"];
    $mensaje = $_POST["cuerpo"];
    $nombre = $_POST["nombre"];
    
    $mensaje1 = $nombre."le envia la siguiente informacion <br>".$mensaje;
    
    $envio= mail($para,$asunto,$mensaje1);
    if($envio){
        echo "ok";
    }else{
        echo "error";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="nombre" placeholder="nombre"><br>
        <input type="text" name="asunto" placeholder="asunto"><br>
        <input type="email" name="correo" placeholder="correo"><br>
        <textarea name="cuerpo">

        </textarea>
        <input type="submit" name="enviar" value="enviar"><br>
    </form>
</body>
</html>