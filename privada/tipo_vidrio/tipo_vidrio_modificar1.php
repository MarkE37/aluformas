<?php
session_start();
require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");

$__id_tipo_vidrio = $_REQUEST["id_tipo_vidrio"];
$__nombre = $_POST["nombre"];
//$db->debug-true;
$smarty = new Smarty;

$reg = array();
$reg["nombre"] = $__nombre;
$reg["_usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("tipo_vidrio", $reg, "UPDATE", "id_tipo_vidrio='".$__id_tipo_vidrio."'");

if($rs1) {
      header("Location: tipo_vidrio.php");
      exit();
}else {
     $smarty->assign("mensaje", "ERROR: Los datos no se modificaron!!!!!!");
     $smarty->assign("direc_css", $direc_css);
     $smarty->assign("id_tipo_vidrio", $__id_tipo_vidrio);
     $smarty->display("tipo_vidrio_modificar1.tpl");
}
