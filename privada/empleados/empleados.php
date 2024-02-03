<?php
session_start();
require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
require_once("../../paginacion.inc.php");

$smarty = new Smarty;

contarRegistros($db, "empleados");

paginacion("empleados.php?", $smarty);

$sql3 = $db->Prepare("	SELECT *
					FROM empleados
					WHERE estado <> '0'
					ORDER BY id_empleado DESC
					LIMIT ? OFFSET ?");


/*$sql3 = $db->Prepare("SELECT *
					  FROM empleados
					  WHERE estado <> '0'
					  AND id_empleado >= 1
					  ORDER BY id_empleado DESC
					  ");
$rs3 = $db->GetAll($sql3);*/
$smarty->assign("empleados", $db->GetAll($sql3, array($nElem, $regIni)));
//$smarty->assign("empleados", $rs3);
$smarty->assign("direc_css", $direc_css);
$smarty->display("empleados.tpl");

?>
