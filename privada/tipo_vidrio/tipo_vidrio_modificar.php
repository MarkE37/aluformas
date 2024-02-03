<?php
     session_start();

     require_once("../../smarty/Smarty.class.php");
     require_once("../../conexion.php");
     require_once("../libreria_menu.php");

     $__id_propietario = $_REQUEST["id_tipo_vidrio"];

     $smarty = new Smarty;

     $sql = $db->Prepare("    SELECT *
                              FROM tipo_vidrio
                              WHERE id_tipo_vidrio = ?
     ");

     $rs = $db->GetAll($sql, array($__id_propietario));
     $smarty->assign("tipo_vidrioes", $rs);
     $smarty->assign("direc_css", $direc_css);
     $smarty->display("tipo_vidrio_modificar.tpl");
?>
