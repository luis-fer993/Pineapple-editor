<?php

session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: ../index.php');
  }

  require '../../php/database.php';

  $message = '';



if (!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirm_password']) ) {

  if( $_POST["password"]!==  $_POST["confirm_password"]){
    $message = "las contraseñas NO SON IGUALES!!!";
  }else{

    $sql1 = "SELECT email FROM users WHERE email= :email";
    $stmt1 = $conn->prepare($sql1);
    $stmt1->bindParam(':email', $_POST['email']);
    
    
     

    if ($stmt1->execute()) {
      $results1 = $stmt1->fetch(PDO::FETCH_ASSOC);
      if(strtolower($results1["email"])==strtolower($_POST['email'])){
        $message = 'Correo ya registrado, revise e intente de nuevo';
      }else{
        
        $sql = "INSERT INTO users (name, email, password, tel, img_perfil,tipo,info) VALUES (:name, :email, :password, :tel,'','','')";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name', $_POST['name']);
        $stmt->bindParam(':email', $_POST['email']);
        $stmt->bindParam(':tel', $_POST['tel']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $stmt->bindParam(':password', $password);
      
        if ($stmt->execute()) {
            echo' <div class="alert" style="background:#2eb885;">
          <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span>
          Realizado correctamente, usuario registrado, inicie secion, para continuar...
          </div>
          ';
          echo "<script> setTimeout(\"location.href='inicio-secion.php'\",10000);</script>";
        } else {
          $message = 'Perdon hubo un error al crear el usuario';
        }


      }
    }else {
      $message = 'Perdon hubo un error al crear el usuario';
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
    <link rel="shortcut icon" href="../../img/icono1.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../css/log-in.css">

    
    <title>Registrate</title>
</head>
<body>


<?php if(!empty($message)): ?>
      
      <div class="alert">
      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
      <?= $message ?>
      </div> 

    <?php endif; ?>
      <div class="login-container">
        <p class="link-regreso"><a href="../">Inicio/</a></p>

          <div class="cont-form">
            <img src="../../img/icono-usuario.png" alt="usuario-logo">
            <h1 class="title">Registrate</h1>
            <form class="formulario" action="registro.php" method="POST">
                
                <input class="input" type="text" name="name" placeholder="Nombre" minlength="2" maxlength="30" required>
                
                <input class="input" type="email" name="email" placeholder="Correo" minlength="5" maxlength="60" required>
                
                <input class="input" type="tel" name="tel" placeholder="Telefono" minlength="10" maxlength="12" required>
                
                <input class="input" type="password" name="password" placeholder="Contraseña" id="pass" minlength="7" required  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Debe contener Mayuscula, Miniscula, un numero y minimo 8 caracteres" required>
                
                <input class="input" type="password" name="confirm_password" placeholder="Repitala" id="pass1" minlength="7" required>
                <br>
<!-- ver password -->
                  <label for="check">Ver contraseña </label>
                  <input type="checkbox" name="check" class="check" onclick="ver_pass()">
                  <br>
                  <br>
                <p>Acepta nuestros <br><a href="../terminos_y_condiciones.html" target="_blank">terminos y condiciones</a><input class="check" type="checkbox" required></p>
                <br>
                <input type="reset" value="Borrar">
                <button class="btn" type="submit" onclick="validaform()">Registrarse</button>
                <p>Ya tienes cuenta? <a href="inicio-secion.php" class="span">Inicia sesion</a></p>
            </form>
          </div>
            <img class="image-container" src="../../img/registro-img.svg" alt="">
      </div>


      <div id="message">
  <h3>La contraseña debe contener minimo:</h3>
  <p id="letter" class="invalid">Una letra<b> minuscula</b></p>
  <p id="capital" class="invalid">Una letra<b> mayuscula</b></p>
  <p id="number" class="invalid">Un <b>numero</b></p>
  <p id="length" class="invalid">Minimo<b>  8 caracteres</b></p>
</div>

      <script src="../../js/validacion-form.js"></script>
</body>
</html>


