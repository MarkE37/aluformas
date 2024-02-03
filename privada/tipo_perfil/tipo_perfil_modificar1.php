<?php
session_start();
require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");

$__id_tipo_perfil = $_REQUEST["id_tipo_perfil"];
$__nombre = $_POST["nombre"];
//$db->debug-true;
$smarty = new Smarty;

$reg = array();
$reg["nombre"] = $__nombre;
$reg["_usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("tipo_perfil", $reg, "UPDATE", "id_tipo_perfil='".$__id_tipo_perfil."'");

if($rs1) {
      header("Location: tipo_perfil.php");
      exit();
}else {
     $smarty->assign("mensaje", "ERROR: Los datos no se modificaron!!!!!!");
     $smarty->assign("direc_css", $direc_css);
     $smarty->assign("id_tipo_perfil", $__id_tipo_perfil);
     $smarty->display("tipo_perfil_modificar1.tpl");
}
