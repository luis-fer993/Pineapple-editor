<?php
session_start();

if (isset($_SESSION['user_id'])) {

require './php/coneccion1.php';

}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/perfil.css">
    <link rel="stylesheet" href="../../css/panel.css">
    <link rel="shortcut icon" href="../../img/icono1.ico" type="image/x-icon">

    <title>Panel. Editor.</title>
</head>

<body>
    <header>
    <div class="barra-nav-contenedor">
            <a href="../pineapple/">
                <img src="../img/icono1.png" alt="" class="logo-nav">

            </a>
            <a href="javascript:void(0)" class="nav-icono-responsive">
                <img src="../img/icono-nav-menu.png" alt="" class="logo-nav" onclick="openNav()">
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <ul>
                        <li>
                            <a href="https://programacion3luis.000webhostapp.com/A/pineapple/">Inicio</a>
                        </li>
                        <li>
                            <a href="https://programacion3luis.000webhostapp.com/A/pineapple/servicios.php">Servicios</a>
                            <details>
                                <summary><img src="../img/flecha-hacia-abajo.png" width=".2em"></summary>
                                <ul>
                                    <li><a href="https://programacion3luis.000webhostapp.com/A/pineapple/servicios.php#editor">Editor</a></li>
                                    <li><a href="https://programacion3luis.000webhostapp.com/A/pineapple/servicios.php#llevalo">Llevalo con tigo</a></li>
                                </ul>
                            </details>
                        </li>
                        <li>
                            <a href="https://programacion3luis.000webhostapp.com/PAGINA WEB DE NORMA IEEE 830/index (1).html">Nosotros</a>

                            <details>
                                <summary><img src="../img/flecha-hacia-abajo.png" width=".2em"></summary>
                                <ul>
                                    <li><a href="http://programacion3luis.000webhostapp.com/PAGINA%20WEB%20DE%20NORMA%20IEEE%20830/descripcion.html#perspectiva">Perspecticas de producto</a></li>
                                    <li><a href="http://programacion3luis.000webhostapp.com/PAGINA%20WEB%20DE%20NORMA%20IEEE%20830/descripcion.html#funciones">Funciones de el producto</a></li>
                                </ul>
                            </details>

                        </li>
                        <li>
                            <a href="https://programacion3luis.000webhostapp.com/A/pineapple/contactos.php">Contactanos</a>
                            <details>
                                <summary><img src="../img/flecha-hacia-abajo.png" width=".2em"></summary>
                                <ul>
                                    <li><a href="https://programacion3luis.000webhostapp.com/A/pineapple/contactos.php">Redes</a></li>

                                </ul>
                            </details>

                        </li>
                    </ul>

                </div>
            </a>
            <nav class="barra-nav">

                <ul class="menu">
                    <li>
                        <!--inicio-->
                        <a href="https://programacion3luis.000webhostapp.com/A/pineapple/" >Inicio</a>
                    </li>
                    <li>
                        <!--introduccipon-->
                        <a href="https://programacion3luis.000webhostapp.com/A/pineapple/servicios.php" >Servicios</a>
                        <ul class="submenu">
                            <li><a href="https://programacion3luis.000webhostapp.com/A/pineapple/servicios.php#editor" target="_self">Editor</a></li>
                            <li><a href="https://programacion3luis.000webhostapp.com/A/pineapple/servicios.php#llevalo" target="_self">Llevalo con tigo</a></li>
                        </ul>
                    </li>
                    <li>
                        <!--descripcion general-->
                        <a href="https://programacion3luis.000webhostapp.com/PAGINA%20WEB%20DE%20NORMA%20IEEE%20830/index%20(1).html" target="_BLANK">Nosotros</a>
                        <ul class="submenu">
                            <li><a href="http://programacion3luis.000webhostapp.com/PAGINA%20WEB%20DE%20NORMA%20IEEE%20830/descripcion.html#perspectiva" target="_self">Perspecticas de producto</a></li>
                            <li><a href="http://programacion3luis.000webhostapp.com/PAGINA%20WEB%20DE%20NORMA%20IEEE%20830/descripcion.html#funciones" target="_self">Funciones de el producto</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="https://programacion3luis.000webhostapp.com/A/pineapple/contactos.php">Contactanos..</a>
                        <ul class="submenu">
                            <li><a href="https://programacion3luis.000webhostapp.com/A/pineapple/contactos.php" target="_self">Redes</a></li>
                        </ul>
                    </li>
                </ul>

            </nav>
            <div class="cont-perfil">

                <div class="opciones-perfil">
                    <div class="img-perfil">
                    <?php if($row["img_perfil"]==NULL):?>
                        <img src="../../img/icono-usuario.png"alt="img-perfil del usuario">
                    <?php else:?>
                    <img src="data:<?php echo $row["tipo"]?>;base64,<?php echo base64_encode($row["img_perfil"]) ?>"alt="img-perfil del usuario">
                    <?php endif;?>
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
                                    <li><a href="admin/">Admin</a></li>
                                    <?php 

                                    ?>
                                <?php endif; ?>
                                <li><a href="#">Panel</a></li>
                                <li><a href="perfil/">Mi perfil</a></li>
                                <li><a href="../../php/salir.php">Salir</a></li>
                            </ul>
                        </details>

                    </div>
                </div>
            </div>
        </div>
        <div class="contenedor-textos-port">
            <div class="titulo-port">
                <h1>Panel de control. </h1>
            </div>
        </div>

    </header>
    <main>

        <div id="slider">
            <input type="radio" name="slider" id="slide1" checked>
            <input type="radio" name="slider" id="slide2">
            <input type="radio" name="slider" id="slide3">
            <input type="radio" name="slider" id="slide4">
            <div id="slides">
                <div id="overflow">
                    <div class="inner">
                        <div class="slide slide_1">
                            <div class="slide-content">
                                <h2>Bienvenid@!!!</h2>
                                <br>
                                <h2> <?= $results["name"] ?></h2>

                            </div>
                        </div>
                        <div class="slide slide_2">
                            <div class="slide-content">
                                <h2>Slide 2</h2>

                            </div>
                        </div>
                        <div class="slide slide_3">
                            <div class="slide-content">
                                <h2>Slide 3</h2>
                            </div>
                        </div>
                        <div class="slide slide_4">
                            <div class="slide-content">
                                <h2>Slide 4</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="controls">
                <label for="slide1"></label>
                <label for="slide2"></label>
                <label for="slide3"></label>
                <label for="slide4"></label>
            </div>
            <div id="bullets">
                <label for="slide1"></label>
                <label for="slide2"></label>
                <label for="slide3"></label>
                <label for="slide4"></label>
            </div>
        </div>

        <center>
            <section class="panel-opciones">
                <div class="contenedor">
                    <div class="btn">
                        <div class="img-btn-crear">
                            <div>
                                <input type="checkbox" id="btn-modal">
                                <label for="btn-modal" class="lbl-modal"><img src="../../img/btn-crear.png"></label>
                                <div class="modal">
                                    <div class="contenedor-modal contenedormodal1">
                                        <header>Antes de continuar..</header>
                                        <label for="btn-modal" class="btn-cerrar">
                                            <p>X</p>
                                        </label>
                                        <div class="contenido">
                                            <h3>
                                                <!-- Agregar un titulo -->
                                            </h3>

                                            <?php if(($user["email"]=="admin@pineapple.com") || ($plan=="basic" || $plan=="pro")):?>
                                                <p>
                                                <!-- Agregar un mensaje -->
                                                Recuerda que vas a entrar a <i>Minipaint</i>,
                                                el cual es un proyecto de codigo abierto, del cual se
                                                compone nuestro editor.

                                                Conoce mas en:<a href="../../pineapple/terminos_y_condiciones.html" target="_blank">nuestros terminos.</a>
                                                <br>
                                                <img src="../../img/gif-lol.gif" width="50%">
                                                <br>
                                            </p>
                                            <div class="contenido-lista">
                                                <!-- <p>Conoce mas de Minipaint en:</p>
                                                <br>
                                                <a href="https://github.com/viliusle/miniPaint" target="_blank"><img src="../../img/GitHub-Logo.png" alt=""></a>
                                                <a href="https://es.wikipedia.org/wiki/Licencia_MIT" target="_blank"><img src="../../img/MIT-logo.png" alt=""></a> -->
                                            </div>
                                            <div class="boton-continuar">
                                                <a href="miniPaint-4.9.1/index.php">Continuar...</a>
                                            </div>
                                            <?php else:?>  
                                                <p>
                                                <!-- Agregar un mensaje -->
                                                <strong>Funcion para plan <i>BASIC o PRO</i></strong>,
                                                primero adquiere un plan y luego si disfruta de la plataforma completa
                                                y nuestro editor MINIPAIN.
                                                <br>
                                                <br>
                                                Conoce mas en:<a href="../../pineapple/terminos_y_condiciones.html" target="_blank">nuestros terminos.</a>
                                                <br>
                                                <h3>Aca un demo de la plataforma:MINIPAINT</h3>
                                                <img src="../../img/preview.gif" alt="imagen de el demo de la aplicacion" width="70%">
                                            </p>
                                            <?php endif;?>    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>Crear</p>
                    </div>

                    <div class="btn">
                        <div class="img-btn-crear">
                            <a href="dibujando.php">
                                <img src="../../img/lapiz-icon.png">
                            </a>
                        </div>
                        <p>Dibujar</p>
                    </div>

                    <div class="btn">
                        <div class="img-btn-crear">
                            <div>
                                <input type="checkbox" id="b1" class="btn-modal">
                                <label for="b1" class="lbl-modal"><img src="../../img/escribir-icon.png"></label>
                                <div class="modal">
                                    <div class="contenedor-modal">
                                        <header>Escribe...</header>
                                        <label for="b1" class="btn-cerrar">
                                            <p>X</p>
                                        </label>
                                        <div class="contenido">
                                            <h3>Planea ideas y objetivos. Escribiendolas.</h3>
                                            <form action="">
                                                <textarea>

                                            </textarea>
                                            </form>
                                            <div class="boton-continuar">
                                                <a href="#">Continuar...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>Escribir</p>
                    </div>

                    <div class="btn">
                        <div class="img-btn-crear">
                            <a href="">
                                <img src="../../img/compartir-icon.png">
                            </a>
                        </div>
                        <p>Compartir</p>
                    </div>

                </div>

                <div class="contenedor2">
                    <div class="titulo-cont2">
                        <h2>Mis proyectos:</h2>
                    </div>
                    <div class="proyectos">

                        <div class="proy">
                            <p>nombre</p>
                            <div class="proy-img">
                                <a href="#">
                                    <img src="../../img/img-proy.svg" alt="imagen de el proyecto del usuario">
                                </a>
                            </div>
                            <div class="proy-descripcion">
                                <p>descripcion de el proyecto y algunas caracteristicas.</p>
                            </div>
                            <div class="btn-editar">
                                <button>Editar.</button>
                            </div>
                        </div>

                        <div class="proy">
                            <p>nombre</p>
                            <div class="proy-img">
                                <a href="#">
                                    <img src="../../img/img-proy.svg" alt="imagen de el proyecto del usuario">
                                </a>
                            </div>
                            <div class="proy-descripcion">
                                <p>descripcion de el proyecto y algunas caracteristicas.</p>
                            </div>
                            <div class="btn-editar">
                                <button>Editar.</button>
                            </div>
                        </div>
                        <div class="proy">
                            <p>nombre</p>
                            <div class="proy-img">
                                <a href="#">
                                    <img src="../../img/img-proy.svg" alt="imagen de el proyecto del usuario">
                                </a>
                            </div>
                            <div class="proy-descripcion">
                                <p>descripcion de el proyecto y algunas caracteristicas.</p>
                            </div>
                            <div class="btn-editar">
                                <button>Editar.</button>
                            </div>
                        </div>
                        <div class="proyecto-vertodo">
                            <button>Ver todos.</button>
                        </div>
                    </div>
                </div>
            </section>

            <section class="lista-tareas">
                <div id="myDIV" class="header">
                    <h2 style="margin:5px">Mi lista de Tareas...</h2>
                    <br>
                    <img src="../../img/gif-lol2.gif">
                    <br>
                    <br>
                    <input type="text" id="myInput" placeholder="Mi Tarea...">
                    <span onclick="newElement()" class="addBtn">Agregar</span>
                </div>

                <ul id="myUL">
                    <li>Recorrer el sitio</li>
                    <li class="checked">Registrarme</li>
                    <li>Adquirir un plan</li>
                    <li>Editar mi fotografia</li>
                </ul>
            </section>
        </center>

        <!--SECION DE EL CARRITO DE COMPRAS-->

        <div class="contenedor-carro">
            <div class="btn-carro">
                <a href="../../pineapple/carro-compras.php" target="_Blank">
                    <img src="../../img/carro-com.png" alt="imagen de carro de compras">
                </a>
            </div>
        </div>

<!--SECION DE BOTON DE ayuda e inquietudes-->

<div class="contenedor-comentarios">
    <div class="btn-comentarios" title="Boton de ayuda, preguntas y dudas...">
        <a href="../ayuda.html" target="_Blank">
            <img src="../../img/pregunta-icon.png" alt="imagen de comentarios">
            
        </a>
    </div>
</div>
<!--  FIN   SECION DE BOTON DE ayuda-->

    </main>
    <footer>
        <div class="contenedor-footer-2">
            <p>Pineaple.Editor de Fotos</p>
        </div>
        <h4 class="titulo-final">&copy; Pineapple. Editor de fotos | 2021</h4>
    </footer>
    <script src="../../js/panel.js"></script>
</body>

</html>