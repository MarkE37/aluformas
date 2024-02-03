<?php
session_start();
require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
require_once("../../paginacion.inc.php");

$smarty = new Smarty;

contarRegistros($db, "tipo_vidrio");

paginacion("tipo_vidrio.php?", $smarty);

$sql3 = $db->Prepare("	SELECT *
					FROM tipo_vidrio
					WHERE id_tipo_vidrio > 1
					ORDER BY id_tipo_vidrio DESC
					LIMIT ? OFFSET ?");


/*$sql3 = $db->Prepare("SELECT *
					  FROM tipo_vidrio
					  WHERE estado <> '0'
					  AND id_tipo_vidrio >= 1
					  ORDER BY id_tipo_vidrio DESC
					  ");
$rs3 = $db->GetAll($sql3);*/
$smarty->assign("tipo_vidrio", $db->GetAll($sql3, array($nElem, $regIni)));
//$smarty->assign("tipo_vidrio", $rs3);
$smarty->assign("direc_css", $direc_css);
$smarty->display("tipo_vidrio.tpl");

?>
