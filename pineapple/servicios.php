<?php
session_start();

if (isset($_SESSION['user_id'])) {

require './php/coneccion1.php';

}


?>

<!-- 

                            ,,,,,                           
                  ,,,,,,,,,,,,,,,,,,,,,,,,,                 
              ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,             
          ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,.         
        ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,       
      ,,,,,,,,,,,,,,,,,,((((((#######,,,,,,,,,,,,,,,,,,     
    ,,,,,,,,,,,,,,,,,,*#      .......%**,,,,,,,,,,,,,,,,,   
   ,,,,,,,,,,,,,,,,,,,*#      .......%****,,,,,,,,,,,,,,,,  
  ,,,,,,,,,,,,,,,,,,,,,#######%%%%%%%#*******,,,,,,,,,,,,,, 
 ,,,,,,,,,,,,,,,,%%%%%%%*,%%%%@@@@@************,,,,,,,,,,,,,
 ,,,,,,,,,,,,,#################%#%%&@&%%#%%%#%#***,,,,,,,,,,
,,,,,,,,,,,,,,###############%%%%%%&@@@@@@%%%%%*****,,,,,,,,
,,,,,,,,,,,,,,#############%%%%,,,,*****&@@@#%#********,,,,,
.,,,,,,,,,,,,,((((((((((((%%%,,,,,,*******@@@((**********,,,
 ,,,,,,,,,,,,,(((((((((((#%%%,,,,,,*******@@@%(*************
 ,,,,,,,,,,,,,((((((((((((%%%,,,,,,*******@@@((************,
  ,,,,,,,,,,,,(((((((((((((%%%%,,,,*****@@@@(((************ 
   ,,,,,,,,,,,###############%%%%%%&@@@@@@%%%%%***********  
    ,,,,,,,,,,*################%#%%%#%%%#%%%#%**********.   
      ,,,,,,,,,,,**************************************     
        ,,,,,,,,,,,,*********************************       
           ,,,,,,,,,,,****************************          
              ,,,,,,,,,,,**********************             
                  .,,,,,,,,***************.          

-->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/servicios.css">
    <link rel="stylesheet" href="../css/perfil.css">
    <link rel="shortcut icon" href="../img/icono1.ico" type="image/x-icon">
    <title>Servicios</title>
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
                        <a href="https://programacion3luis.000webhostapp.com/A/pineapple/">Inicio</a>
                    </li>
                    <li>
                        <!--introduccipon-->
                        <a href="https://programacion3luis.000webhostapp.com/A/pineapple/servicios.php">Servicios</a>
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





                <?php if (!empty($user)) : ?>
                    <!-- //si  se ha iniciado secion--- -->

                    <div class="cont-perfil">

                        <div class="opciones-perfil">
                            <div class="img-perfil">
                                <?php if ($row["img_perfil"] == NULL) : ?>
                                    <img src="../img/icono-usuario.png" alt="img-perfil del usuario">
                                <?php else : ?>
                                    <img src="data:<?php echo $row["tipo"] ?>;base64,<?php echo base64_encode($row["img_perfil"]) ?>" alt="img-perfil del usuario">
                                <?php endif; ?>
                            </div>
                            <div class="cont-opc-perfil">

                                <div class="nombre-perfil">
                                    <p id="nombre-usuario"><?= $user["name"]; ?></p>
                                </div>
                                <details>

                                    <summary>

                                    </summary>

                                    <ul>
                                        <?php if (!empty($user) && $user["email"] == "admin@pineapple.com") : ?>
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

        <?php else : ?>
            <!-- //si no se ha iniciado secion--- -->
            <div class="login-cont">
                <button class="inicio-secion" type="button"><a href="inicia/inicio-secion.php">Inicio sesion</a></button>
                <button class="registro" type="button"><a href="inicia/registro.php">Registro</a></button>
            </div>
        <?php endif; ?>
        </div>
        <div class="contenedor-port">
            <div class="imagen-portada">
                <img src="../img/servicios.gif" alt="imagen de portada">
            </div>
            <div class="contenedor-textos-port">
                <div class="titulo-port">
                    <h1>Nuestros Servicios</h1>
                    <h2>Siempre con tigo</h2>
                </div>
            </div>
        </div>
    </header>
    <main>

        <section class="contenedor servicios">
            <div class="contenedor-servicios">
                <h2 class="titulo">Nuestros servicios</h2>
                <div class="servicio-cont">
                    <div class="servicio-ind1">
                        <a href="#" id="crea">
                            <img src="../img/servicio1.svg" alt="">
                            <h3>Crea tus Fotos.</h3>
                            <p> En nuestra pagina podras encontrar diferentes programas para crear tus fotos como lo deseas :
                            </p>
                            <ul>
                                <li>
                                    <div></div>Stickers
                                </li>
                                <li>
                                    <div></div>Dibujos
                                </li>
                                <li>
                                    <div></div>Filtros
                                </li>
                                <li>
                                    <div></div>Herramientas
                                </li>
                                <li>
                                    <div></div>Y mucho mas!!
                                </li>
                            </ul>
                        </a>
                    </div>

                    <center id="editor">
                        <div class="linea"></div>

                    </center>

                    <div class="servicio-ind1 s2">
                        <a href="#">
                            <img src="../img/servicios2.svg" alt="">
                            <h3>Editor Online</h3>
                            <p> Aqui en este editor online podras entrar en cualquier momento de tu dia y lo mas importante es que no te va ha ocupar ningun almacenamiento en tu dispositivo
                                deja que nos encargemos de tus fotos mientras las editas de forma facil y divertida.</p>
                        </a>
                    </div>
                    <center id="llevalo">
                        <div class="linea"></div>
                    </center>


                    <div class="servicio-ind1">
                        <a href="#">
                            <img src="../img/servicios3.svg" alt="">
                            <h3>Usalo en cualquier lugar.</h3>
                            <p> Nos referimos ha que nuestro editor de fotos lo podras usar en cualquier dispositivo electronico ya sea en tu celular,tablet,lapto etc...
                                no te preocupes por tu dispositivo, siempre podras editar tus fotos, estes donde estes.</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!--SECION DE EL CARRITO DE COMPRAS-->

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
                    <a href="http://facebook.com/" target="_blank"><img src="../img/facebook.svg" alt="red de facebook"><b>Facebook</b></a>
                </div>
                <div class="redes-cont">
                    <a href="http://youtube.com/" target="_blank"><img src="../img/youtube.svg" alt="red youtube"><b>Youtube</b></a>
                </div>
                <div class="redes-cont">
                    <a href="https://www.instagram.com/?hl=es" target="_blank"><img src="../img/instagram.svg" alt="instag"><b>Instagram</b></a>
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