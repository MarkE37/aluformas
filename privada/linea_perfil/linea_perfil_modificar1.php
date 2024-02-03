<?php
session_start();
require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");

$__id_linea_perfil = $_REQUEST["id_linea_perfil"];
$__linea = $_POST["linea"];
//$db->debug-true;
$smarty = new Smarty;

$reg = array();
$reg["linea"] = $__linea;
$reg["_usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("linea_perfil", $reg, "UPDATE", "id_linea_perfil='".$__id_linea_perfil."'");

if($rs1) {
      header("Location: linea_perfil.php");
      exit();
}else {
     $smarty->assign("mensaje", "ERROR: Los datos no se modificaron!!!!!!");
     $smarty->assign("direc_css", $direc_css);
     $smarty->assign("id_linea_perfil", $__id_linea_perfil);
     $smarty->display("linea_perfil_modificar1.tpl");
}
