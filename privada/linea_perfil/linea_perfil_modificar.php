<?php
     session_start();

     require_once("../../smarty/Smarty.class.php");
     require_once("../../conexion.php");
     require_once("../libreria_menu.php");

     $__id_propietario = $_REQUEST["id_linea_perfil"];

     $smarty = new Smarty;

     $sql = $db->Prepare("    SELECT *
                              FROM linea_perfil
                              WHERE id_linea_perfil = ?
     ");

     $rs = $db->GetAll($sql, array($__id_propietario));
     $smarty->assign("linea_perfiles", $rs);
     $smarty->assign("direc_css", $direc_css);
     $smarty->display("linea_perfil_modificar.tpl");
?>
