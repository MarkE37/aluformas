<?php
     session_start();

     require_once("../../smarty/Smarty.class.php");
     require_once("../../conexion.php");
     require_once("../libreria_menu.php");

     $__id_vidrio = $_REQUEST["id_vidrio"];
     $__id_tipo_vidrio = $_REQUEST["id_tipo_vidrio"];
     $__id_color = $_REQUEST["id_color"];

     $smarty = new Smarty;

     $sql = $db->Prepare("	SELECT *
                              FROM vidrios
                              WHERE id_vidrio = ? ");
     $rs = $db->GetAll($sql, array($__id_vidrio));

     $sql3 = $db->Prepare("	SELECT *
                              FROM color
                              WHERE id_color = ? ");
     $rs3 = $db->GetAll($sql3, array($__id_color));

     $sql4 = $db->Prepare("	SELECT *
                              FROM tipo_vidrio
                              WHERE id_tipo_vidrio = ? ");
     $rs4 = $db->GetAll($sql4, array($__id_tipo_vidrio));




     $sql6 = $db->Prepare("	SELECT *
                              FROM color
                              WHERE id_color <> ? ");
     $rs6 = $db->GetAll($sql6, array($__id_color));

     $sql7 = $db->Prepare("	SELECT *
                              FROM tipo_vidrio
                              WHERE id_tipo_vidrio <> ? ");
     $rs7 = $db->GetAll($sql7, array($__id_tipo_vidrio));

     $smarty->assign("vidrio", $rs);
     $smarty->assign("colores", $rs3);
     $smarty->assign("tipovidrios", $rs4);
     $smarty->assign("color", $rs6);
     $smarty->assign("tipovidrio", $rs7);
     $smarty->assign("direc_css", $direc_css);
     $smarty->display("vidrio_modificar.tpl");
?>
