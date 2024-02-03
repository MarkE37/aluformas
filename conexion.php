<?php
require_once("adodb/adodb.inc.php");
error_reporting(E_ALL & ~E_DEPRECATED);

$direc_css = "../css/style.css";
$icon = "../css/img/bitmap1.svg";
$conServidor = "localhost";
$conUsuario = "root";
$conClave = "";
$conBasededatos = "bd_aluformas";

$db = ADONewConnection("mysqli");

$conex = $db->Connect($conServidor,$conUsuario, $conClave, $conBasededatos);
$db->Execute("SET NAMES 'utf8'");
?>
