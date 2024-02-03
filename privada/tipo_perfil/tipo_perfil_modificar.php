<?php
     session_start();

     require_once("../../smarty/Smarty.class.php");
     require_once("../../conexion.php");
     require_once("../libreria_menu.php");

     $__id_propietario = $_REQUEST["id_tipo_perfil"];

     $smarty = new Smarty;

     $sql = $db->Prepare("    SELECT *
                              FROM tipo_perfil
                              WHERE id_tipo_perfil = ?
     ");

     $rs = $db->GetAll($sql, array($__id_propietario));
     $smarty->assign("tipo_perfiles", $rs);
     $smarty->assign("direc_css", $direc_css);
     $smarty->display("tipo_perfil_modificar.tpl");
?>
