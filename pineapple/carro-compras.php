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
    <link rel="stylesheet" href="../css/carro.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/perfil.css">
    <link rel="shortcut icon" href="../img/carro-com.png" type="image/x-icon">
    <title>Compras...</title>
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
                <img src="../img/billetera.svg" alt="imagen de portada">
            </div>
            <div class="contenedor-textos-port">
                <div class="titulo-port">
                    <h1>Compras integradas.</h1>
                    <h2>Seguras y confiables.</h2>
                </div>

            <div class="medios-pago">
                <img src="../img/Nequi.png" alt="">
                <img src="../img/DAVIPLATA.png" alt="">
                <img src="../img/efectivo.png" alt="">
            </div>
            </div>
        </div>
    </header>
    <main>
    <section class="contenedor planes">
            <h2>Planes</h2>
            <div class="contenedor-planes">
                <div class="plan plan1">
                    <h3>Plan FREE</h3>
                    <center>
                        <div class="plan-imagen">
                            <img src="../img/plan-free.png" alt="imagen de plan">
                        </div>
                    </center>
                    <div class="plan-lista">
                        <ul>
                            <li>Acceso a la plataforma con uso limitado</li>
                            <li>Descargas de imagen con marcas de Agua</li>
                            <li>Subida de archivos menores a 5MB</li>
                        </ul>
                    </div>
                    <?php if (!empty($user)) : ?>
                        <!-- //si  se ha iniciado secion--- -->

                        <?php if ($plan =="free") : ?>
                            <div class="plan-actual">
                                <h3>Mi plan actual</h3>
                            </div>

                        <?php else : ?>
.

                        <?php endif; ?>

                    <?php else : ?>
                        <!-- //si no se ha iniciado secion--- -->
                        <div class="plan-boton">
                            <button type="button">
                                <a href="inicia/inicio-secion.php" target="_self">COMIENZA!!</a>
                            </button>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="plan plan2">
                    <h3>Plan BASIC</h3>
                    <center>
                        <div class="plan-imagen">
                            <img src="../img/plan-basic.png" alt="imagen de plan">
                        </div>
                    </center>
                    <div class="plan-lista">
                        <ul>
                            <li>Acceso a la aplataforma</li>
                            <li>Sin marca de Agua</li>
                            <li>Con acceso limitado a los Stickers</li>
                            <li>Subida de archivos de mas de 5MB</li>
                        </ul>
                    </div>
                    <?php if (!empty($user)) : ?>
                        <!-- //si  se ha iniciado secion--- -->

                        <?php if ($plan == "basic") : ?>
                            <div class="plan-actual">
                                <h3>Mi plan actual</h3>
                            </div>

                        <?php else : ?>

                            <div class="plan-boton">
                                <div>
                                    <input type="checkbox" id="btn-modal">
                                    <label for="btn-modal" class="lbl-modal">
                                        <p>COMPRAR!!</p>
                                    </label>
                                    <div class="modal">
                                        <div class="contenedor-modal">
                                            <header>Antes de continuar..</header>
                                            <label for="btn-modal" class="btn-cerrar">
                                                <p>X</p>
                                            </label>
                                            <div class="contenido">
                                                <h3>Compra de Plan </h3>
                                                
                                                <p>
                                                    <ol style="list-style:decimal; margin:auto 20px;padding:20px" class="ol-xd">
                                                        <li>Lea las intruciones</li>
                                                        <li>De click en el boton Continuar</li>
                                                        <li>Comuniquese con Nosotros mediante WhatsApp</li>
                                                        <li>Identifiquese con su correo con el que inicio secion</li>
                                                        <li>En el mismo Chat le daran las instrucciones para terminar su compra</li>
                                                        <li>No olvide ser respetuoso para asi tener un mejor servicio</li>
                                                    </ol>
                                                </p> 
                                                    <br>
                                                <div class="boton-continuar">
                                                    <a href="https://wa.me/+573027007080?text=Hola soy <?php echo $user['name']?>, Me comunico con ustedes para adquirir el plan BASIC en la plataforma, mi correo es <?php echo $user['email']?>, Gracias. Estoy atento " target="_blank">Continuar...</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endif; ?>

                    <?php else : ?>
                        <!-- //si no se ha iniciado secion--- -->
                        <div class="plan-boton">
                            <button type="button">
                                <a href="inicia/inicio-secion.php" target="_self">COMIENZA!!</a>
                            </button>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="plan plan3">
                    <h3>Plan PRO</h3>
                    <center>
                        <div class="plan-imagen">
                            <img src="../img/plan-pro.png" alt="imagen de plan">
                        </div>
                    </center>
                    <div class="plan-lista">
                        <ul>
                            <li>Acceso completo a la plataforma</li>
                            <li>Sin marcas de agua</li>
                            <li>todos los Stickers</li>
                            <li>Descargas en todos los formatos</li>
                            <li>Todos los filtros desbloqueados</li>
                        </ul>
                    </div>
                    <?php if (!empty($user)) : ?>
                        <!-- //si  se ha iniciado secion--- -->

                        <?php if ($plan == "pro") : ?>
                            <div class="plan-actual">
                                <h3>Mi plan actual</h3>
                            </div>

                        <?php else : ?>

                            <div class="plan-boton">
                            <div>
                                <input type="checkbox" id="b1" class="btn-modal">
                                <label for="b1" class="lbl-modal">
                                <p>COMPRAR!!</p>
                                </label>
                                <div class="modal">
                                    <div class="contenedor-modal">
                                        <header>Antes de continuar..</header>
                                        <label for="b1" class="btn-cerrar">
                                            <p>X</p>
                                        </label>
                                        <div class="contenido">
                                                <h3>Compra de Plan </h3>
                                                <p>
                                                    <ol style="list-style:decimal; margin:auto 20px;padding:20px" class="ol-xd">
                                                        <li>Lea las intruciones</li>
                                                        <li>De click en el boton Continuar</li>
                                                        <li>Comuniquese con Nosotros mediante WhatsApp</li>
                                                        <li>Identifiquese con su correo con el que inicio secion</li>
                                                        <li>En el mismo Chat le daran las instrucciones para terminar su compra</li>
                                                        <li>No olvide ser respetuoso para asi tener un mejor servicio</li>
                                                    </ol>
                                                    <style>
                                                        .ol-xd{
                                                            background-color: whitesmoke;
                                                            overflow: auto;
                                                            max-height: 200px;
                                                        }
                                                        .ol-xd>li{
                                                            font-size: large;
                                                            font-weight: bold;
                                                        }

                                                    </style>
                                                    <br>
                                                    </p>
                                            <div class="boton-continuar">
                                            <a href="https://wa.me/+573027007080?text=Hola soy <?php echo $user['name']?>, Me comunico con ustedes para adquirir el plan PRO en la plataforma, mi correo es <?php echo $user['email']?>, Gracias. Estoy atento " target="_blank">Continuar...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>

                        <?php endif; ?>

                    <?php else : ?>
                        <!-- //si no se ha iniciado secion--- -->
                        <div class="plan-boton">
                            <button type="button">
                                <a href="inicia/inicio-secion.php" target="_self">COMIENZA!!</a>
                            </button>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>


        <!--SECION DE BOTON DE ayuda e inquietudes-->

<div class="contenedor-comentarios">
    <div class="btn-comentarios" title="Boton de ayuda, preguntas y dudas...">
        <a href="ayuda.html" target="_Blank">
            <img src="../img/pregunta-icon.png">
            
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
        <style>
        /* PLAN ACTUAL EN PLANES */
        .plan-actual{
   background-image: url(../img/background-index.jpg);
   border: 4px dashed yellow;
   width: 90%;
   margin-top: 15px;
   position: absolute;
   bottom: 0;
   margin-bottom: 20px;
}
    </style>
    <script src="../js/panel.js"></script>
</body>
</html>