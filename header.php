<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php  require('./php/conexion.php'); ?>
<?php
//--------verificaciones para login
if(!isset($_SESSION)){
    session_start();
}
if (!isset($_SESSION['nombre_Usuario'])){

    header ("Location: index.php");
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" type="image/png" href="./css/logousac.png" />
<link rel="stylesheet" type="text/css" href="./css/menu.css" />
<link rel="stylesheet" type="text/css" href="./css/style.css" />
<link rel="stylesheet" type="text/css" href="./css/css/font-awesome.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!--<script src="./javascripts/verificaciones.js"></script>
<script src="./javascripts/login.js"></script>-->
<title>EduAnalisis</title>
</head>
<body>
    <div class="banner">
        <div class="image_banner">
       <a href="./principal.php"><img src="./images/banner.png"></a>
       </div>
       <div class="container_sub">
            <ul id="nav">
                <li><a href="./principal.php" > Principal </a></li>
                <li><a href="./principal.php" > Acerca De </a></li>
                <li><a href="php/logout.php" class="fa fa-toggle-off"><?php echo " ".$_SESSION['nombre_Usuario']; ?> Logout</a></li>
            </ul>
       </div>
        <div class="div_clear"></div>
        <div class="container">        
            <ul id="nav">

                <li id="li_afiliados"><a href="#s1">Maestros</a>
                    <span id="s1"></span>
                    <ul class="subs">
                        <li><a href="#">Gestion de Maestros</a>
                            <ul>
                                <li id="li_maestros_fe"><a href="./abc/maestros_fe.php">Operaciones Sobre Maestros</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li id="li_clientes"><a href="#s2">Alumnos</a>
                    <span id="s2"></span>
                    <ul class="subs">
                        <li><a href="#">Gestion de Clientes</a>
                            <ul>
                                <li id="li_clientes_fe"><a href="../abc/abc_clientes_fe.php">Operaciones Sobre Clientes</a></li>

                            </ul>
                        </li>
                    </ul>
                </li>

                <li id="li_Cuenta"><a href="#s3">Cursos</a>
                    <span id="s3"></span>
                    <ul class="subs">
                        <li><a href="#">Gestion de Cuentas</a>
                            <ul>
                                 <li id="li_cuenta_fe"><a href="../abc/cuenta_fe.php">Operaciones sobre Cuenta</a></li>
                                <li id="li_tipo_cuenta_fe"><a href="../abc/tipo_cuenta_fe.php">Operaciones sobre Tipo Cuenta</a></li>
                                <li id="li_cuenta_fe"><a href="../abc/tarjeta_debito_fe.php">Tarjetas de Debito</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li id="li_creditos"><a href="#s4">Asignaciones</a>
                    <span id="s4"></span>
                    <ul class="subs">
                        <li><a href="#">Gestion de Creditos</a>
                            <ul>
                                <li id="li_emisores_fe"><a href="../creditos/emisores_fe.php">Operaciones Sobre Emisores</a></li>
                                <li id="li_creditos_fe"><a href="../creditos/creditos_fe.php">Operaciones Sobre Creditos</a></li>
                                <li id="li_tarjetascredito_fe"><a href="../creditos/tarjetascredito_fe.php">Operaciones Sobre Tarjetas de Credito</a></li>

                            </ul>
                        </li>
                    </ul>
                </li>
                <li id="li_autorizaciones"><a href="#s5">Horarios</a>
                    <span id="s5"></span>
                    <ul class="subs">
                        <li><a href="#">Horarios</a>
                            <ul>
                                <li id="li_autorizacion_fe"><a href="../Opciones/autorizacion_fe.php">Autorizacion</a></li>
                                <li id="li_retiro_fe"><a href="../Opciones/retiro_fe.php">Retiro efectivo</a></li>
                                <li id="li_consulta_fe"><a href="../Opciones/consulta_fe.php">Consulta de saldos</a></li>
                                <li id="li_reporte_fe"><a href="../Opciones/reporte_fe.php">Robos o Extravios</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                 
            </ul>
        </div>
</div>