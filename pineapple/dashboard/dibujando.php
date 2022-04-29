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
    <link rel="stylesheet" href="../../css/panel.css">
    <link rel="stylesheet" href="../../css/perfil.css">
    <link rel="stylesheet" href="../../css/dibujando.css">
    <link rel="shortcut icon" href="../../img/icono1.ico" type="image/x-icon">
    <title>Dibujando..</title>
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
                            <p id="nombre-usuario"><?=$results["name"];?></p>
                        </div>
                        <details>
                            
                            <summary>
                                
                            </summary>

                            <ul >
                            <?php if(!empty($user) && $user["email"]=="admin@pineapple.com"): ?> 
                                <li><a href="admin/">Admin</a></li>
                            <?php endif; ?>
                                <li><a href="index.php">Panel</a></li>
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
                <h1>Dibujando..</h1>
            </div>
        </div>

    </header>
    <main>

        <section class="editor-dibujo">
            <center>
                <div class="contenedor-dibujo">
                    

                    <div class="opciones">
                        <p>
                            pintando Pineapple
                
                            <a href="" download="Mi_dibujo_Pineapple.png" class="descarga">Descargar!!</a>
                            <i class="fa fa-refresh refresh-btn"><strong>Limpiar</strong></i>
                        </p>
                            <div class="pen-tools" id="pen-tools">
                                <div class="drawing-colors" id="drawing-colors">
                                    <div class="color-circle active" data-color="hotpink" onclick="selectColor(this)"></div>
                                    <div class="color-circle " data-color="orange" onclick="selectColor(this)"></div>
                                    <div class="color-circle " data-color="red" onclick="selectColor(this)"></div>
                                    <div class="color-circle " data-color="yellow" onclick="selectColor(this)"></div>
                                    <div class="color-circle " data-color="black" onclick="selectColor(this)"></div>
                                    <div class="color-circle " data-color="blue" onclick="selectColor(this)"></div>
                                    <div class="color-circle " data-color="white" onclick="selectColor(this)"></div>
                                    <div class="color-circle " data-color="green" onclick="selectColor(this)"></div>
                                </div>
                                
                
                            <div id="favContainer">
                                <label for="favcolor">Selecciona tu color personalizado:</label>
                                <input type="color" name="favcolor" id="favcolor" value="#ff0000" onchange="favColor(this)">
                            </div>
                            <div id="pen-size" class="pen-size">
                                <label for="pen-size"><i class="fa fa-pencil"></i>Tamaño del lapiz.</label>
                                <input type="range" name="pen-size" id="pen-size" value="10" step="5" min="5" max="40" onchange="penSizeChange(this.value)">
                            </div>
                        </div>
                        <div class="board">
                            <canvas width="800px" height="590px"></canvas>
                        </div>
                    </div>


                </div>
            </center>
            <div class="menu-opciones-dib">
                 
            </div>
        </section>

        <!--SECION DE EL CARRITO DE COMPRAS-->

        <div class="contenedor-carro">
            <div class="btn-carro">
                <a href="../../pineapple/carro-compras.php" target="_Blank">
                    <img src="../../img/carro-com.png" alt="imagen de carro de compras">
                </a>
            </div>
        </div>

        

    </main>
    <footer>
        <div class="contenedor-footer-2">
            <p>Pineaple.Editor de Fotos</p>
        </div>
        <h4 class="titulo-final">&copy; Pineapple. Editor de fotos | 2021</h4>
    </footer>

    <script src="../../js/dibujando.js"></script>
    <script src="../../js/panel.js"></script>
</body>
</html>
