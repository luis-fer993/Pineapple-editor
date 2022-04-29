<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: ../index.php');
  }
  require "../../php/database.php";

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
          $_SESSION['user_id'] = $results['id'];

    $consult = "SELECT * FROM suscripcion WHERE id = {$results['id']}";
    $stmt2 = $conn->prepare($consult);
    $conexiones = $stmt2->execute();
    $results4 = $stmt2->fetch(PDO::FETCH_ASSOC);
    if ($conexiones) {

      if($results4["suscripcion"]==NULL){

        $sql1 = "INSERT INTO suscripcion (id,suscripcion, fecha_exp,codigo,cod_us)
        VALUES (:id, :sus, :fech ,:cod,:cod)";
        $pl='free';
        $day =date("Y-m-d");
        $l =$results['id'];
        $cod =rand(1000,9999);;
        $stmt1 = $conn->prepare($sql1);
        $stmt1->bindParam(':id', $l);
        $stmt1->bindParam(':sus',$pl);
        $stmt1->bindParam(':fech', $day);
        $stmt1->bindParam(':cod', $cod);
        if($stmt1->execute()){
         // echo "ECHO";
        }else{
        //  echo "fallo suscribir al usuario";
        }
  }

    } else {
    //  echo "fallo en consulta suscripcion";
    }


    header("Location: ../dashboard/index.php");
    } else {
      $message = 'Perdon, las credenciales ingresadas no coinciden!!';
    }
  }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../../css/log-in.css">
    
    <title>Inicia sesion</title>
</head>
<body>

<?php if(!empty($message)): ?>
      
      <div class="alert">
      <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
      <?= $message ?>
      </div> 

  
    <?php endif; ?>
    
      <div class="login-container">

<img class="image-container" src="../../img/login.svg" alt="">


          <p class="link-regreso"><a href="../">Inicio/</a></p>
          
          <div class="cont-form">
            <img src="../../img/icono-usuario.png" alt="usuario-logo">
            <h1 class="title">Inicia sesion</h1>
            <form class="formulario" method="POST" action="inicio-secion.php">
                <input class="input" type="email" name="email" placeholder="Correo" required>
                <input class="input" type="password" name="password" placeholder="Contraseña" id="pass" required>
                <br>
<!-- ver password -->
                  <label for="check">Ver contraseña </label>
                  <input type="checkbox" name="check" class="check" onclick="ver_pass()">
                  <br>
                  <br>
                <p>Olvido su contraseña?? <a href="" class="span">Click aqui</a></p>
                <p>O inicia con:</p>
                <div class="social-login">
                    <div class="social-login-element">
                        <img src="../../img/google.svg" alt="google-image">
                        <span>Google</span>
                    </div>
                    <div class="social-login-element">
                        <img src="../../img/facebook.svg" alt="facebook-image">
                        <span>Facebook</span>
                    </div>
                </div>
                <button class="btn" type="submit"onclick="myFunction1()">Iniciar secion</button>
                <p>No tienes cuenta? <a href="registro.php" class="span">registrate</a></p>
            </form>
          </div>
            
      </div>



      <script>
        function ver_pass() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
} 



// Get all elements with class="closebtn"
var close = document.getElementsByClassName("closebtn");
var i;

// Loop through all close buttons
for (i = 0; i < close.length; i++) {
  // When someone clicks on a close button
  close[i].onclick = function(){

    // Get the parent of <span class="closebtn"> (<div class="alert">)
    var div = this.parentElement;

    // Set the opacity of div to 0 (transparent)
    div.style.opacity = "0";

    // Hide the div after 600ms (the same amount of milliseconds it takes to fade out)
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}


</script>
</body>
</html>

