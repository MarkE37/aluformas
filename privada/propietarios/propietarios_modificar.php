<?php
     session_start();

     require_once("../../smarty/Smarty.class.php");
     require_once("../../conexion.php");
     require_once("../libreria_menu.php");

     $__id_propietario = $_REQUEST["id_propietario"];

     $smarty = new Smarty;

     $sql = $db->Prepare("    SELECT *
                              FROM propietarios
                              WHERE id_propietario = ?
     ");

     $rs = $db->GetAll($sql, array($__id_propietario));
     $smarty->assign("propietario", $rs);
     $smarty->assign("direc_css", $direc_css);
     $smarty->display("propietarios_modificar.tpl");
?>
