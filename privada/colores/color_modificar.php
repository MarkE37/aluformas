<?php
     session_start();

     require_once("../../smarty/Smarty.class.php");
     require_once("../../conexion.php");
     require_once("../libreria_menu.php");

     $__id_propietario = $_REQUEST["id_color"];

     $smarty = new Smarty;

     $sql = $db->Prepare("    SELECT *
                              FROM color
                              WHERE id_color = ?
     ");

     $rs = $db->GetAll($sql, array($__id_propietario));
     $smarty->assign("colores", $rs);
     $smarty->assign("direc_css", $direc_css);
     $smarty->display("color_modificar.tpl");
?>
