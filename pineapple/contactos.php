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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/contactanos.css">
    <link rel="stylesheet" href="../css/perfil.css">
    <link rel="shortcut icon" href="../img/icono1.ico" type="image/x-icon">
    <title>Contacto.</title>
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



                <?php if(!empty($user)): ?>
                <!-- //si  se ha iniciado secion--- -->
                
                <div class="cont-perfil">
                
                <div class="opciones-perfil">
                    <div class="img-perfil">
                    <?php if($row["img_perfil"]==NULL):?>
                        <img src="../img/icono-usuario.png"alt="img-perfil del usuario">
                    <?php else:?>
                    <img src="data:<?php echo $row["tipo"]?>;base64,<?php echo base64_encode($row["img_perfil"]) ?>"alt="img-perfil del usuario">
                    <?php endif;?>
                    </div>
                    <div class="cont-opc-perfil">
                        
                        <div class="nombre-perfil">
                            <p id="nombre-usuario"><?=$user["name"];?></p>
                        </div>
                        <details>
                            
                            <summary>
                                
                            </summary>

                            <ul>
                            <?php if(!empty($user) && $user["email"]=="admin@pineapple.com"): ?> 
                                <li><a href="dashboard/admin/">Admin</a></li>
                            <?php endif; ?>
                                <li><a href="dashboard/index.php">Panel</a></li>
                                <li><a href="dashboard/perfil/">Mi perfil</a></li>
                                <li><a href="../php/salir.php">Salir</a></li>
                            </ul>
                        </details>
                        
                    </div>
                </div>
            </div>

            </nav>

            <?php else: ?>
              <!-- //si no se ha iniciado secion--- -->
            <div class="login-cont">
                    <button class="inicio-secion" type="button"><a href="inicia/inicio-secion.php">Inicio sesion</a></button>
                    <button class="registro" type="button"><a href="inicia/registro.php">Registro</a></button>
                </div>
              <?php endif; ?>
        </div>
        <div class="contenedor-port">
            <div class="imagen-portada">
                <img src="../img/contactanos.svg" alt="imagen de portada">
            </div>
            <div class="contenedor-textos-port">
                <div class="titulo-port">
                <h1>Contactanos de forma sencilla.</h1>
                <h2>Cuenta con Nosotros estes donde estes.</h2>
                </div>

                <?php if(!empty($user)): ?>
                <!-- //si  se ha iniciado secion--- -->

                <div class="boton-port">
                    <center>
                        <a href="https://wa.me/message/M5F7JUGPFCKMB1" target="_blank"><?=$results["name"]?> Escribenos ->
                        
                            <div class="boton-whatsapp">
                                <img src="../img/WhatsApp-Logo.png" alt="logo de WhatsApp-Logo">
                            </div></a>
                    </center>
                </div>

            <?php else: ?>
              <!-- //si no se ha iniciado secion--- -->

              <div class="boton-port">
                    <center>
                        <a href="https://wa.me/message/M5F7JUGPFCKMB1" target="_blank">Escribenos...
                        
                            <div class="boton-whatsapp">
                                <img src="../img/WhatsApp-Logo.png" alt="logo de WhatsApp-Logo">
                            </div></a>
                    </center>
                </div>

              <?php endif; ?>
            </div>
        </div>
    </header>
    <main>
        <section class="contenedor clientes">
            <h2>Desarrolladores.</h2>
            <div class="cards">
                <div class="card">
                    <img src="../img/luis.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Luis Fernando chaparro</h4>
                        <p>
                            Estudiante, y programador web, de la ciudad de Bogota.Colombia.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <img src="../img/cristian.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Cristian Fabian franco</h4>
                        <p>
                           Estudiante y Diseñador web, de Bogota.Colombia, le gusta la Musica y el deporte.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="contenedor nosostros">
            <h2>Conoce Nuestras instalaciones.</h2>
            <div class="contenedor-nosotros">

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3977.5460468512774!2d-74.11947178581045!3d4.495054544659388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3fa348022a990d%3A0xb610080831470b49!2sColegio%20Usminia%20Sede%20A!5e0!3m2!1ses!2sco!4v1625609403331!5m2!1ses!2sco"  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </section>
        <section class="contenedor form">
            <h2>Envianos un mensaje</h2>
            <div class="contenedor-form">
                <form action="POST" id="form">
                    <div class="form">
                        <div class="grupo">
                            <input type="text" required id="name" maxlength="50"><span class="barra"></span>
                            <label for="">Nombre</label>
                        </div>
                        <div class="grupo">
                            <input type="tel" required id="name" maxlength="12"><span class="barra"></span>
                            <label for="">Telefono</label>
                        </div>
                        <div class="grupo">
                            <input type="email" required id="name" maxlength="40"><span class="barra"></span>
                            <label for="">Correo</label>
                        </div>
                        <div class="grupo">
                            <textarea name="comentarios" id="textarea cols="30" rows="10" placeholder="mensaje"></textarea>
                        </div>
                        <div class="grupo">
                            <button type="submit">Enviar...</button>
                        </div>
                </form>
            </div>
        </section>
        <div class="contenedor-carro">
            <div class="btn-carro">
                <a href="carro-compras.php" target="_Blank">
                    <img src="../img/carro-com.png" alt="imagen de carro de compras">
                </a>
            </div>
        </div>

<!--SECION DE BOTON DE ayuda e inquietudes-->

<div class="contenedor-comentarios">
    <div class="btn-comentarios" title="Boton de ayuda, preguntas y dudas...">
        <a href="ayuda.html" target="_Blank">
            <img src="../img/pregunta-icon.png" alt="imagen de comentarios">
            
        </a>
    </div>
</div>
<!--  FIN   SECION DE BOTON DE ayuda-->

    </main>
    <footer>
        <div class="contenedor-footer-1">
            <div class="redes">
                <div class="redes-cont">
                    <a href="https://www.facebook.com/" target="_blank"><img src="../img/facebook.svg" alt="red de facebook"></a><b>Facebook</b>
                </div>
                <div class="redes-cont">
                    <a href="https://www.youtube.com/" target="_blank"><img src="../img/youtube.svg" alt="red youtube"></a><b>Youtube</b>
                </div>
                <div class="redes-cont">
                    <a href="https://www.instagram.com/?hl=es" target="_blank"><img src="../img/instagram.svg" alt="instag"></a><b>Instagram</b>
                </div>
            </div>
            <div class="logo-footer">
                <img src="../img/logo-footer.svg" alt="logo de la marca">
            </div>
        </div>
        <div class="caja-sep"></div>
        <div class="contenedor-footer-2">
            <p>Pineaple.Editor de Fotos</p>

        </div>
        <h4 class="titulo-final">&copy; Pineapple. Editor de fotos | 2021</h4>
    </footer>
    <script src="../js/panel.js"></script>
</body>
</html>