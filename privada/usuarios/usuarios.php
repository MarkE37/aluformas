<?php
session_start();
require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
require_once("../../paginacion.inc.php");

$smarty = new Smarty;

contarRegistros($db, "usuarios");

paginacion("usuarios.php?", $smarty);

$sql3 = $db->Prepare("SELECT *
					  FROM usuarios u
					  INNER JOIN personas p ON u.id_persona = p.id_persona
					  WHERE u.estado<>'0'
					  AND p.estado<>'0'
					  ORDER BY u.id_persona DESC
					  LIMIT ? OFFSET ?
					  ");


/*$sql3 = $db->Prepare("SELECT *
					  FROM usuarios
					  WHERE estado <> '0'
					  AND id_usuario >= 1
					  ORDER BY id_usuario DESC
					  ");
$rs3 = $db->GetAll($sql3);*/
$smarty->assign("usuarios", $db->GetAll($sql3, array($nElem, $regIni)));
//$smarty->assign("usuarios", $rs3);
$smarty->assign("direc_css", $direc_css);
$smarty->display("usuarios.tpl");

?>
