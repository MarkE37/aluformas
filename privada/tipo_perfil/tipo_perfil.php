<?php
session_start();
require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
require_once("../../paginacion.inc.php");

$smarty = new Smarty;

contarRegistros($db, "tipo_perfil");

paginacion("tipo_perfil.php?", $smarty);

$sql3 = $db->Prepare("	SELECT *
					FROM tipo_perfil
					WHERE id_tipo_perfil > 1
					ORDER BY id_tipo_perfil DESC
					LIMIT ? OFFSET ?");


/*$sql3 = $db->Prepare("SELECT *
					  FROM tipo_perfil
					  WHERE estado <> '0'
					  AND id_tipo_perfil >= 1
					  ORDER BY id_tipo_perfil DESC
					  ");
$rs3 = $db->GetAll($sql3);*/
$smarty->assign("tipo_perfil", $db->GetAll($sql3, array($nElem, $regIni)));
//$smarty->assign("tipo_perfil", $rs3);
$smarty->assign("direc_css", $direc_css);
$smarty->display("tipo_perfil.tpl");

?>
