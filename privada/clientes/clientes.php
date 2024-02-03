<?php
session_start();
require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
require_once("../../paginacion.inc.php");

$smarty = new Smarty;

contarRegistros($db, "clientes");

paginacion("clientes.php?", $smarty);

$sql3 = $db->Prepare("	SELECT *
					FROM clientes
					WHERE estado <> '0'
					ORDER BY id_cliente DESC
					LIMIT ? OFFSET ?");


/*$sql3 = $db->Prepare("SELECT *
					  FROM clientes
					  WHERE estado <> '0'
					  AND id_cliente >= 1
					  ORDER BY id_cliente DESC
					  ");
$rs3 = $db->GetAll($sql3);*/
$smarty->assign("clientes", $db->GetAll($sql3, array($nElem, $regIni)));
//$smarty->assign("clientes", $rs3);
$smarty->assign("direc_css", $direc_css);
$smarty->display("clientes.tpl");

?>
