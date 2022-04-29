<?php

session_start();

require_once '../../../php/database.php';


if (isset($_SESSION['user_id'])) {

    $records = $conn->prepare('SELECT * FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
        $user = $results;
    }
} else {
    header('Location: ../index.php');
}



if (isset($_REQUEST["actualizar"])) {
    if (isset($_FILES["foto-perfil"]["name"])) {

        $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
        $limite_kb = 10000; //10 mb maximo

        if (in_array($_FILES['foto-perfil']['type'], $permitidos) && $_FILES['foto-perfil']['size'] <= $limite_kb * 1024) {



            $tipoArchivo = $_FILES["foto-perfil"]["type"];
            $tamanoArchivo = $_FILES["foto-perfil"]["size"];

            $imagenSubida = fopen($_FILES["foto-perfil"]["tmp_name"], "r");
            $binariosImagen = fread($imagenSubida, $tamanoArchivo);
            
            $conn1= new mysqli($server,$username,$password,$database);


            $binariosImagen = mysqli_escape_string($conn1, $binariosImagen);
            $img = $binariosImagen;

            // $id_us =$_POST["email"];
            $id_us = $_SESSION["user_id"];


            $sql1 = "UPDATE users SET img_perfil = ('$img'), tipo = ('$tipoArchivo') WHERE id = $id_us ;";
            $resultado1 = mysqli_query($conn1, $sql1);

            if ($resultado1) {
                //header("Location: ..\pineapple\dashboard\perfil\index.php");
                echo "ok";
            } else {
                echo "ocurrio un error";
            }
        } else {
            echo "Formato de archivo no permitido o excede el tamaño límite de $limite_kb Kbytes.";
        }
    }
}


?>





<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../../css/style.css">
    <link rel="stylesheet" href="../../../css/perfil.css">
    <link rel="stylesheet" href="../../../css/panel.css">
    <link rel="stylesheet" href="../../../css/opt-perfil.css">
    <link rel="icon" href="../../../img/icono1.ico" type="image/x-icon">
    <title>Mi perfil...</title>
</head>

<body>

    <header>
        <div class="barra-nav-contenedor">
            <a href="../../../pineapple/">
                <img src="../../../img/icono1.png" alt="" class="logo-nav">
            </a>
                        <a href="../pineapple/" class="nav-icono-responsive">
                <img src="../../../img/icono-nav-menu.png" alt="" class="logo-nav">
            </a>
            <nav class="barra-nav">

                <ul class="menu">
                    <li>
                        <!--inicio-->
                        <a href="../../../pineapple/" target="_self">Inicio</a>
                    </li>
                    <li>
                        <!--introduccipon-->
                        <a href="../../../pineapple/servicios.php" target="_self">Servicios</a>
                        <ul class="submenu">
                            <li><a href="../../../pineapple/servicios.php#editor" target="_self">Editor</a></li>
                            <li><a href="../../../pineapple/servicios.php#llevalo" target="_self">Llevalo con tigo</a></li>
                        </ul>
                    </li>
                    <li>
                        <!--descripcion general-->
                        <a href="https://programacion3luis.000webhostapp.com/PAGINA%20WEB%20DE%20NORMA%20IEEE%20830/index%20(1).html" target="_BLANK">Nosotros</a>
                        <ul class="submenu">
                            <li><a href="http://programacion3luis.000webhostapp.com/PAGINA%20WEB%20DE%20NORMA%20IEEE%20830/descripcion.html#perspectiva" target="_self">perspecticas de producto</a></li>
                            <li><a href="http://programacion3luis.000webhostapp.com/PAGINA%20WEB%20DE%20NORMA%20IEEE%20830/descripcion.html#funciones" target="_self">Funciones de el producto</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="../../../pineapple/contactos.php">Contactanos..</a>
                        <ul class="submenu">
                            <li><a href="../../../pineapple/contactos.php" target="_self">Redes</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div class="cont-perfil">

                <div class="opciones-perfil">
                    <div class="img-perfil">

                        <?php if ($row["img_perfil"] == NULL) : ?>
                            <img src="../../../img/icono-usuario.png" alt="img-perfil del usuario">
                        <?php else : ?>
                            <img src="data:<?php echo $row["tipo"] ?>;base64,<?php echo base64_encode($row["img_perfil"]) ?>" alt="img-perfil del usuario">
                        <?php endif; ?>

                    </div>
                    <div class="cont-opc-perfil">
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(1, 1, 1, 1);"><path d="M16.939 10.939 12 15.879l-4.939-4.94-2.122 2.122L12 20.121l7.061-7.06z"></path><path d="M16.939 3.939 12 8.879l-4.939-4.94-2.122 2.122L12 13.121l7.061-7.06z"></path></svg> -->
                        <div class="nombre-perfil">
                            <p id="nombre-usuario"><?= $results["name"]; ?></p>
                        </div>
                        <details>

                            <summary>

                            </summary>

                            <ul>
                                <?php if (!empty($user) && $user["email"] == "admin@pineapple.com") : ?>
                                    <li><a href="../admin/">Admin</a></li>
                                <?php endif; ?>
                                <li><a href="../index.php">Panel</a></li>
                                <li><a href="#">Mi perfil</a></li>
                                <li><a href="../../../php/salir.php">Salir</a></li>
                            </ul>
                        </details>

                    </div>
                </div>
            </div>
        </div>
        <div class="contenedor-textos-port">
            <div class="titulo-port">
                <h1>Perfil de usuario..</h1>
            </div>
        </div>

    </header>
    <main>
        <div class="contenedor-principal">

            <div class="side-bar">
                <div class="foto-perfil">
                    <h2>Mi foto de perfil</h2>

                    <div class="imagen-perfil">
                        <center>
                            <?php if ($row["img_perfil"] == NULL) : ?>
                                <img src="../../../img/icono-usuario.png" alt="img-perfil del usuario">
                            <?php else : ?>
                                <img src="data:<?php echo $row["tipo"] ?>;base64,<?php echo base64_encode($row["img_perfil"]) ?>" alt="img-perfil del usuario">
                            <?php endif; ?>
                        </center>

                    </div>
                    <center>
                        <form action="" method="post" class="img-update" enctype="multipart/form-data">
                            <input type="file" required name="foto-perfil">
                            <input type="hidden" name="email" value="<?= $results["id"] ?>">
                            <br>

                            <button type="submit" name="actualizar">Actualizar imagen</button>
                        </form>
                    </center>
                </div>
            </div>
            <div id="message">
            <h3>La contraseña debe contener minimo:</h3>
            <p id="letter" class="invalid">Una letra<b> minuscula</b></p>
            <p id="capital" class="invalid">Una letra<b> mayuscula</b></p>
            <p id="number" class="invalid">Un <b>numero</b></p>
            <p id="length" class="invalid">Minimo<b> 8 caracteres</b></p>
        </div>
            <div class="datos-principal">
                <h2>Datos Usuario</h2>
                <br>
                <div class="dato">
                    <h3>Nombre:</h3>
                    <p><?= "  " . $results["name"] ?></p>
                </div>

                <div class="dato">
                    <h3>Correo:</h3>
                    <p><?= "  " . $results["email"]  ?></p>
                </div>
                <div class="dato">
                    <h3>Telefono:</h3>
                    <p><?= "  " . $results["tel"]  ?></p>
                </div>
                <div class="dato">
                    <h3>Informacion adicional:</h3>
                    <br>
                    <br>
                    <p><?= "  " . $results["info"]  ?></p>
                </div>
                <div class="opciones-botones">
                    <div>
                        <input type="checkbox" id="btn-modal">
                        <label for="btn-modal" class="lbl-modal">Actualizar datos</label>
                        <div class="modal">
                            <div class="contenedor-modal">
                                <header>Actualiza tus datos..</header>
                                <label for="btn-modal" class="btn-cerrar">
                                    <p>X</p>
                                </label>
                                <div class="contenido">
                                    <h3></h3>
                                    <p></p>
                                    <form action="../../../php/actualizar-datos.php" method="post" class="form-datos">
                                        <h3>Su Nombre</h3>
                                        <input type="text" name="name" value="<?php echo $user["name"] ?>"><br>
                                        <h3>Su Telefono</h3>
                                        <input type="number" name="tel" value="<?php echo $user["tel"] ?>"><br>
                                        <h3>Su informacion</h3>
                                        <textarea name="info" maxlength="350" minlength="3" value="<?php echo $user["info"] ?>"></textarea><br>
                                        <div class="boton-continuar">
                                            <input type="submit" name="actualizar-d" value="Actualizar datos">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <input type="checkbox" id="b1" class="btn-modal">
                        <label for="b1" class="lbl-modal">Cambiar contraseña</label>
                        <div class="modal">
                            <div class="contenedor-modal">
                                <header>Cambiar contraseña...</header>
                                <label for="b1" class="btn-cerrar">
                                    <p>X</p>
                                </label>
                                <div class="contenido">
                                    <h3></h3>
                                    <p></p>
                                    <form action="../../../php/cambiar-pass.php" method="post" class="form-datos">
                                        <h3>Su contraseña actual</h3>
                                        <input type="password" name="actual-password" id="pass2" required><br>
                                        <h3>Nueva contraseña</h3>
                                        <input class="input" type="password" name="password" placeholder="Contraseña" id="pass" minlength="7" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Debe contener Mayuscula, Miniscula, un numero y minimo 8 caracteres" required>
                                        <br>
                                        <h3>Repitala:</h3>
                                        <input class="input" type="password" name="confirm_password" placeholder="Repitala" id="pass1" minlength="7" required><br>
                                        <h4>Ver contraseña </h4>
                                        <input type="checkbox" name="check" class="check" onclick="ver_pass()">
                                        <input type="hidden" name="id" value="<?php echo $user["id"]; ?>">
                                        <br>
                                        <div class="boton-continuar">
                                            <input type="submit" name="actualizar-d" value="Cambiar contraseña">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </main>
    <footer>
        <div class="contenedor-footer-2">
            <p>Pineaple.Editor de Fotos</p>
        </div>
        <h4 class="titulo-final">&copy; Pineapple. Editor de fotos | 2021</h4>
    </footer>
    <script src="../../../js/validacion-form.js"></script>
    <script src="../../../js/panel.js"></script>
</body>

</html>