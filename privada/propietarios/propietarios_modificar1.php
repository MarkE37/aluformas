<?php
session_start();
require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");

$__id_propietario = $_REQUEST["id_propietario"];
$__ci = $_POST["ci"];
$__nombre = $_POST["nombre"];
$__telefono = $_POST["telefono"];
//$db->debug-true;
$smarty = new Smarty;

$reg = array();
$reg["ci"] = $__ci;
$reg["nombre"] = $__nombre;
$reg["telefono"] = $__telefono;
$reg["_usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("propietarios", $reg, "UPDATE", "id_propietario='".$__id_propietario."'");

if($rs1) {
      header("Location: propietarios.php");
      exit();
}else {
     $smarty->assign("mensaje", "ERROR: Los datos no se modificaron!!!!!!");
     $smarty->assign("direc_css", $direc_css);
     $smarty->assign("id_propietario", $__id_propietario);
     $smarty->display("propietarios_modificar1.tpl");
}
