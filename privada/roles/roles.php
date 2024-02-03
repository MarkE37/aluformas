<?php
session_start();
require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");

$smarty = new Smarty;

$sql =$db->Prepare("     SELECT *
					FROM usuarios_roles ur
                         INNER JOIN usuarios u ON ur.id_usuario = u.id_usuario
                         INNER JOIN roles r ON ur.id_rol = r.id_rol
					WHERE u.estado<>'0'
					AND r.estado<>'0'
					AND ur.estado<>'0'
					ORDER BY r.id_rol DESC
					");
$rs = $db->GetAll($sql);

$smarty->assign("roles", $rs);
$smarty->assign("direc_css", $direc_css);
$smarty->display("roles.tpl");
?>
