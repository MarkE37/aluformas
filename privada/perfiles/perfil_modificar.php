<?php
     session_start();

     require_once("../../smarty/Smarty.class.php");
     require_once("../../conexion.php");
     require_once("../libreria_menu.php");

     $__id_perfil = $_REQUEST["id_perfil"];
     $__id_linea_perfil = $_REQUEST["id_linea_perfil"];
     $__id_tipo_perfil = $_REQUEST["id_tipo_perfil"];
     $__id_color = $_REQUEST["id_color"];

     $smarty = new Smarty;

     $sql = $db->Prepare("	SELECT *
                              FROM perfiles
                              WHERE id_perfil = ? ");
     $rs = $db->GetAll($sql, array($__id_perfil));

     $sql2 = $db->Prepare("	SELECT *
                              FROM linea_perfil
                              WHERE id_linea_perfil = ? ");
     $rs2 = $db->GetAll($sql2, array($__id_linea_perfil));

     $sql3 = $db->Prepare("	SELECT *
                              FROM color
                              WHERE id_color = ? ");
     $rs3 = $db->GetAll($sql3, array($__id_color));

     $sql4 = $db->Prepare("	SELECT *
                              FROM tipo_perfil
                              WHERE id_tipo_perfil = ? ");
     $rs4 = $db->GetAll($sql4, array($__id_tipo_perfil));




     $sql5 = $db->Prepare("	SELECT *
                              FROM linea_perfil
                              WHERE id_linea_perfil <> ? ");
     $rs5 = $db->GetAll($sql5, array($__id_linea_perfil));

     $sql6 = $db->Prepare("	SELECT *
                              FROM color
                              WHERE id_color <> ? ");
     $rs6 = $db->GetAll($sql6, array($__id_color));

     $sql7 = $db->Prepare("	SELECT *
                              FROM tipo_perfil
                              WHERE id_tipo_perfil <> ? ");
     $rs7 = $db->GetAll($sql7, array($__id_tipo_perfil));

     $smarty->assign("perfil", $rs);
     $smarty->assign("lineaPerfiles", $rs2);
     $smarty->assign("colores", $rs3);
     $smarty->assign("tipoPerfiles", $rs4);
     $smarty->assign("lineaPerfil", $rs5);
     $smarty->assign("color", $rs6);
     $smarty->assign("tipoPerfil", $rs7);
     $smarty->assign("direc_css", $direc_css);
     $smarty->display("perfil_modificar.tpl");
?>
