<?php
session_start();
require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");

$__id_color = $_REQUEST["id_color"];
$__nombre = $_POST["nombre"];
//$db->debug-true;
$smarty = new Smarty;

$reg = array();
$reg["nombre"] = $__nombre;
$reg["_usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("color", $reg, "UPDATE", "id_color='".$__id_color."'");

if($rs1) {
      header("Location: color.php");
      exit();
}else {
     $smarty->assign("mensaje", "ERROR: Los datos no se modificaron!!!!!!");
     $smarty->assign("direc_css", $direc_css);
     $smarty->assign("id_color", $__id_color);
     $smarty->display("color_modificar1.tpl");
}
