<?php
session_start();
require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
require_once("../../paginacion.inc.php");

$smarty = new Smarty;

contarRegistros($db, "linea_perfil");

paginacion("linea_perfil.php?", $smarty);

$sql3 = $db->Prepare("	SELECT *
					FROM linea_perfil
					WHERE id_linea_perfil > 1
					ORDER BY id_linea_perfil DESC
					LIMIT ? OFFSET ?");


/*$sql3 = $db->Prepare("SELECT *
					  FROM linea_perfil
					  WHERE estado <> '0'
					  AND id_linea_perfil >= 1
					  ORDER BY id_linea_perfil DESC
					  ");
$rs3 = $db->GetAll($sql3);*/
$smarty->assign("linea_perfil", $db->GetAll($sql3, array($nElem, $regIni)));
//$smarty->assign("linea_perfil", $rs3);
$smarty->assign("direc_css", $direc_css);
$smarty->display("linea_perfil.tpl");

?>
