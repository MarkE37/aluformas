<?php
session_start();
require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");

$__id_vidrio = $_REQUEST["id_vidrio"];
$__id_tipo_vidrio = $_POST["tipo_vidrio"];
$__id_color = $_POST["color"];
$__ancho = $_POST["ancho"];
$__alto = $_POST["alto"];
//$db->debug-true;
$smarty = new Smarty;

$reg = array();
$reg["id_tipo_vidrio"] = $__id_tipo_vidrio;
$reg["id_color"] = $__id_color;
$reg["ancho"] = $__ancho;
$reg["alto"] = $__alto;
$reg["_usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("vidrios", $reg, "UPDATE", "id_vidrio='".$__id_vidrio."'");

if($rs1) {
      header("Location: vidrios.php");
      exit();
}else {
     $smarty->assign("mensaje", "ERROR: Los datos no se modificaron!!!!!!");
     $smarty->assign("direc_css", $direc_css);
     $smarty->assign("id_vidrio", $__id_vidrio);
     $smarty->display("vidrio_modificar1.tpl");
}
