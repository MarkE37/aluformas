<?php
     session_start();

     require_once("../../smarty/Smarty.class.php");
     require_once("../../conexion.php");
     require_once("../libreria_menu.php");

     $__id_propietario = $_REQUEST["id_vidrieria"];

     $smarty = new Smarty;

     $sql = $db->Prepare("    SELECT *
                              FROM vidrieria
                              WHERE id_vidrieria = ?
     ");

     $rs = $db->GetAll($sql, array($__id_propietario));
     $smarty->assign("vidrieria", $rs);
     $smarty->assign("direc_css", $direc_css);
     $smarty->display("vidrieria_modificar.tpl");
?>
