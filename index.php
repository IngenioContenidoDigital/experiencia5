<?php
session_start();
if(isset($_SESSION['usuario'])){
    session_start();
    header('Location: home.php');
}else{

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta author="creado por www.ingeniocontenido.co">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Experiencia 5</title>
    <script type="text/javascript" src="scr/jquery-latest.js"></script>
    <!-- Bootstrap -->
    
    <link href="ext/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="sty/style.css" rel="stylesheet" type="text/css">
    <link href="sty/responsive.css" rel="stylesheet" type="text/css">
    
    
    <script type="text/javascript" src="ext/bootstrap/js/bootstrap.min.js"></script>
    
  </head>
  <body class="fondo">
          <div class="separador"></div>
          <div class="cuerpo fondo-inicio">
                <div class="card card-container">
                    <img id="profile-img" class="profile-img-card" src="img/user.png" />
                    <p id="profile-name" class="profile-name-card"></p>
                    <p id="profile-title" class="profile-title-card titulo">DATOS DE USUARIO</p>
                    <form class="form-signin" method="post" action="controllers/SessionController.php?option=inicio" >
                        <span id="reauth-email" class="reauth-email"></span>
                        <input type="text" id="inputEmail" name="user" class="form-control titulo2" placeholder="Usuario" required autofocus>
                        <input type="password" id="inputPassword" name="pass" class="form-control titulo2" placeholder="Contrase&ntilde;a" required>
                        <div id="remember" class="checkbox">
                            <label class="bloque-texto">
                                <input type="checkbox" value="remember-me" /> Recordarme
                            </label>
                        </div>
                        <input class="btn btn-lg btn-primary btn-block btn-signin titulo" type="submit" value="ENTRAR" />
                    </form><!-- /form -->
                    <!--<a href="#" class="forgot-password bloque-texto">
                        &iquest;Olvid&oacute; su Contrase&ntilde;a?
                    </a>-->        
                </div><!-- /card-container -->
                <div class="logo-home"><img src="img/logo.png" /></div>
          </div>
          <?php
            include('./footer.php');
          ?>
  </body>
</html>
<?php
}
?>