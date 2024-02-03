<?php
session_start();
require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");

$__id_vidrieria = $_REQUEST["id_vidrieria"];
$__direccion = $_POST["direccion"];
$__nombre = $_POST["nombre"];
$__telefono = $_POST["telefono"];
$__logo_agencia1 = $_POST["logo_agencia1"];
$__nombre_logo = $_FILES["logo_agencia"]["name"];

$db->debug-true;
$smarty = new Smarty;

if ((!empty($_FILES["logo_agencia"])) and is_uploaded_file($_FILES["logo_agencia"]["tmp_name"])) {
     copy($_FILES["logo_agencia"]["tmp_name"],'../../img/'.$__nombre_logo);
     $logo_agencia = $_FILES["logo_agencia"]["name"];
} elseif ($__logo_agencia1 == "") {
     $logo_agencia = "";
     $__nombre_logo = "";
} else
     $__nombre_logo = $__logo_agencia1;

$reg = array();
$reg["direccion"] = $__direccion;
$reg["nombre"] = $__nombre;
$reg["telefono"] = $__telefono;
$reg["logo_agencia"] = $__nombre_logo;
$reg["_usuario"] = $_SESSION["sesion_id_usuario"];
$rs1 = $db->AutoExecute("vidrieria", $reg, "UPDATE", "id_vidrieria='".$__id_vidrieria."'");

if($rs1) {
      header("Location: vidrieria.php");
      exit();
}else {
     $smarty->assign("mensaje", "ERROR: Los datos no se modificaron!!!!!!");
     $smarty->assign("direc_css", $direc_css);
     $smarty->assign("id_vidrieria", $__id_vidrieria);
     $smarty->display("vidrieria_modificar1.tpl");
}
