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
<title>BANCAUSAC</title>
</head>
<body>
    <div class="banner">
       <a href="../principal.php"><img src="../images/banner.png"></a>
    </div>
        <div class="container">
            <ul id="nav">
                <li><a href="../principal.php" > Principal </a></li>
                <li id="li_afiliados"><a href="#s1">Afiliados</a>
                    <span id="s1"></span>
                    <ul class="subs">
                        <li><a href="#">Gestion de Afiliados</a>
                            <ul>
                                <li id="li_tipo_afiliado_fe"><a href="../abc/tipo_afiliado_fe.php">Operaciones Sobre Tipos de Afiliados</a></li>
                                <li id="li_afiliado_fe"><a href="../abc/afiliado_fe.php">Operaciones Sobre Afiliados</a></li>

                            </ul>
                        </li>
                    </ul>
                </li>
                <li id="li_clientes"><a href="#s2">Clientes</a>
                    <span id="s2"></span>
                    <ul class="subs">
                        <li><a href="#">Gestion de Clientes</a>
                            <ul>
                                <li id="li_clientes_fe"><a href="../abc/abc_clientes_fe.php">Operaciones Sobre Clientes</a></li>

                            </ul>
                        </li>
                    </ul>
                </li>
                <li id="li_Cuenta"><a href="#s3">Cuentas</a>
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
                <li id="li_creditos"><a href="#s4">Creditos</a>
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
                <li id="li_autorizaciones"><a href="#s5">Autorizaciones</a>
                    <span id="s5"></span>
                    <ul class="subs">
                        <li><a href="#">Gestion de Autorizaciones</a>
                            <ul>
                                <li id="li_autorizacion_fe"><a href="../Opciones/autorizacion_fe.php">Autorizacion</a></li>
                                <li id="li_retiro_fe"><a href="../Opciones/retiro_fe.php">Retiro efectivo</a></li>
                                <li id="li_consulta_fe"><a href="../Opciones/consulta_fe.php">Consulta de saldos</a></li>
                                <li id="li_reporte_fe"><a href="../Opciones/reporte_fe.php">Robos o Extravios</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li id="li_caja"><a href="#s6">Caja</a>
                    <span id="s6"></span>
                    <ul class="subs">
                        <li><a href="#">Gestion de Caja</a>
                            <ul>
                                <li id="li_pagos_fe"><a href="../caja/pagos_fe.php"> Pagos de Cuentas </a></li>
                                <li id="li_transferencia_fe"><a href="../caja/transferencia_fe.php"> Transferencias </a></li>
                                <li id="li_transferencia_fe"><a href="../caja/notas_credito_fe.php"> Notas de Credito </a></li>
                                <li id="li_transferencia_fe"><a href="../caja/notas_debito_fe.php"> Notas de Debito </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li id="li_autidor"><a href="#s7">Auditor</a>
                    <span id="s7"></span>
                    <ul class="subs">
                        <li><a href="#">Senda de Auditoria</a>
                            <ul>
                                <li id="li_consultas_fe"><a href="../auditor/senda_auditoria_fe.php"> Consultas </a></li>
                                <li id="li_reportes_fe"><a href="../auditor/transferencia_fe.php"> Reportes </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li id="li_grabador"><a href="#s8"> Grabador </a>
                    <span id="s8"></span>
                    <ul class="subs">
                        <li><a href="#"> Gestion de Grabador </a>
                            <ul>
                                <li id="li_grab_voucher_fe"><a href="../operador_grabador/lote_voucher_fe.php"> Lotes de Voucher </a></li>
                                <li id="li_grab_retiro_fe"><a href="../operador_grabador/lote_retiros_fe.php"> Lotes de Retiros </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li id="li_operador"><a href="#s9"> Operador </a>
                    <span id="s9"></span>
                    <ul class="subs">
                        <li><a href="#"> Gestion de Operador</a>
                            <ul>
                                <li id="li_grab_voucher_fe"><a href="../operador_grabador/op_lote_voucher_fe.php"> Lotes de Voucher </a></li>
                                <li id="li_grab_retiro_fe"><a href="op_lote_retiro_fe.php"> Lotes de Retiros </a></li>
                                <li id="li_corte_fe"><a href="../operador_grabador/corte_fe.php"> Corte de la tarjeta </a></li>
                                <li id="li_emision_fe"><a href="../operador_grabador/emision_estado_fe.php"> Emision de estados de cuenta </a></li>
                                <li id="li_cierre_fe"><a href="../operador_grabador/cierre_fe.php"> Cierre de la tarjeta </a></li>
                                <li id="li_lista_fe"><a href="../operador_grabador/lista_negra_fe.php"> Emision de lista negra </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li id="li_gerente"><a href="#s10"> Gerente </a>
                    <span id="s10"></span>
                    <ul class="subs">
                        <li><a href="#"> Gestion de Gerente </a>
                            <ul>
                                <li id="li_consulta_saldo"><a href="../gerente/grafica_emisor_fe.php"> Consulta saldos por emisor </a></li>
                                <li id="li_consulta_evolucion"><a href="../gerente/grafica_evolucion_fe.php"> Consulta evolucion de saldos promedio </a></li>
                                <li id="li_consulta_emisor"><a href="../gerente/consulta_emisor.php"> Consulta emisores </a></li>

                            </ul>
                        </li>
                    </ul>
                </li>
                <li id="li_dba"><a href="#s11"> DBA </a>
                    <span id="s11"></span>
                    <ul class="subs">
                        <li><a href="#"> Operaciones DBA </a>
                            <ul>
                                <li id="li_tasa_interes"><a href="../dba/interes_fe.php"> Tasas de Interes </a></li>
                                <li id="li_emisores"><a href="../creditos/emisores_fe.php"> Emisores </a></li>
                                <li id="li_usuarios"><a href="../dba/usuarios_fe.php"> Usuarios </a></li>
                                <li id="li_backup"><a href="../php/backup_base.php"> back up Base de Datos </a></li>

                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="php/logout.php" class="fa fa-toggle-off"><?php echo " ".$_SESSION['nombre_Usuario']; ?> Logout</a></li>
            </ul>
        </div>