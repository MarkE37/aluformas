<?php
session_start();
require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;

/*$sql3 = $db->Prepare("	SELECT vi.id_vidrio, tv.id_tipo_vidrio, co.id_color, tv.nombre AS nombre_vidrio, co.nombre AS Color, vi.ancho, vi.alto
					FROM vidrios vi
					INNER JOIN tipo_vidrio tv ON vi.id_tipo_vidrio = tv.id_tipo_vidrio
					INNER JOIN color co ON vi.id_color = co.id_color
					ORDER BY id_vidrio DESC
					");*/


$sql3 = $db->Prepare("	SELECT vi.id_vidrio, tv.id_tipo_vidrio, co.id_color, tv.nombre AS nombre_vidrio, co.nombre AS Color, vi.ancho, vi.alto
					FROM vidrios vi
					INNER JOIN tipo_vidrio tv ON vi.id_tipo_vidrio = tv.id_tipo_vidrio
					INNER JOIN color co ON vi.id_color = co.id_color
					ORDER BY id_vidrio DESC
					  ");
$rs3 = $db->GetAll($sql3);
//$smarty->assign("vidrios", $db->GetAll($sql3, array($nElem, $regIni)));
$smarty->assign("vidrios", $rs3);
$smarty->assign("direc_css", $direc_css);
$smarty->display("vidrios.tpl");

?>
