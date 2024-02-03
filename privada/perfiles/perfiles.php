<?php
session_start();
require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
require_once("../../paginacion.inc.php");

$smarty = new Smarty;

contarRegistros($db, "perfiles");

paginacion("perfiles.php?", $smarty);

$sql3 = $db->Prepare("	SELECT pe.id_perfil, tp.id_tipo_perfil, lp.id_linea_perfil, co.id_color, tp.nombre AS Nombre_Perfil, lp.linea AS Linea_Perfil, co.nombre AS Color, pe.largo, pe.precio_perfil AS Precio_de_Perfil
					FROM perfiles pe
					INNER JOIN tipo_perfil tp ON pe.id_tipo_perfil = tp.id_tipo_perfil
					INNER JOIN linea_perfil lp ON pe.id_linea_perfil = lp.id_linea_perfil
					INNER JOIN color co ON pe.id_color = co.id_color
					ORDER BY id_perfil DESC
					LIMIT ? OFFSET ?");


/*$sql3 = $db->Prepare("SELECT *
					  FROM perfiles
					  WHERE estado <> '0'
					  AND id_perfil >= 1
					  ORDER BY id_perfil DESC
					  ");
$rs3 = $db->GetAll($sql3);*/
$smarty->assign("perfiles", $db->GetAll($sql3, array($nElem, $regIni)));
//$smarty->assign("perfiles", $rs3);
$smarty->assign("direc_css", $direc_css);
$smarty->display("perfiles.tpl");

?>
