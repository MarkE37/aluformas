<?php
session_start();
require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
require_once("../../paginacion.inc.php");

$smarty = new Smarty;

contarRegistros($db, "proveedores");

paginacion("proveedores.php?", $smarty);

$sql3 = $db->Prepare("	SELECT *
					FROM proveedores
					WHERE estado <> '0'
					ORDER BY id_proveedor DESC
					LIMIT ? OFFSET ?");


/*$sql3 = $db->Prepare("SELECT *
					  FROM proveedores
					  WHERE estado <> '0'
					  AND id_proveedor >= 1
					  ORDER BY id_proveedor DESC
					  ");
$rs3 = $db->GetAll($sql3);*/
$smarty->assign("proveedores", $db->GetAll($sql3, array($nElem, $regIni)));
//$smarty->assign("proveedores", $rs3);
$smarty->assign("direc_css", $direc_css);
$smarty->display("proveedores.tpl");

?>
