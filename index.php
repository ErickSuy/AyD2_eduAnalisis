<?php
//--------verificaciones para login

if(!isset($_SESSION)){
    session_start();
}
if (isset($_SESSION['nombre_Usuario'])){
    header ("Location: principal.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php  require('./php/conexion.php'); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="icon" type="image/png" href="./css/logousac.png" />
<link rel="stylesheet" type="text/css" href="./css/menu.css" />
<link rel="stylesheet" type="text/css" href="./css/style.css" />
<link rel="stylesheet" type="text/css" href="./css/css/font-awesome.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="./javascripts/verificaciones.js"></script>
<script src="./javascripts/login.js"></script>
<title>BANCAUSAC</title>
</head>
<body>
<div class="banner">
       <img src="./images/banner.png"></a>
    </div>

<div class="container">
            <ul id="nav">
                <li id="li_afiliados"><a href="#">BANCAUSAC</a></li>
            </ul>
</div>
<div class="div_clear"></div>
<div id="div_cuerpo">
    <!--- formulario -->
    <div class="div_formulario">
        <h1>Login <i class="fa fa-user"></i></h1>
		<div class="div_input">
			Nombre *
			<input class="register-input" type="text" id='name' name="name" value="" maxlength=45/>
			<label id="l_name" class="label_error" visible="false"></label>
		</div>
		<div class="div_clear"></div>
		<div class="div_input">
			Contrasena *
			<input class="register-input" type="password" id='pass' name="pass" value="" maxlength=45/>
			<label id="l_pass" class="label_error" visible="false"></label>
		</div>
		<div class="div_clear"></div>
		<div class="div_input">
				<select id="rol">
				</select>
	</div>

	</div>
	<div class="div_clear"></div>
	<input type="submit" id="iniciar" name="iniciar" value="Iniciar"/>
</div>

</body>
</html>