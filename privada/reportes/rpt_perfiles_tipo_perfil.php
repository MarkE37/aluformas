<?php
     session_start();
     require_once("../../smarty/Smarty.class.php");
     require_once("../../conexion.php");
     require_once("../libreria_menu.php");

     $sql = $db->Prepare("    SELECT *
                              FROM tipo_perfil tp
                              WHERE tp.estado <> '0'
                         ");
     $rs = $db->GetAll($sql);
     /*$sql1 = $db->Prepare("   SELECT *
                              FROM colores co
                              WHERE co.estado <> '0'
                         ");
     $rs1 = $db->GetAll($sql1);
     $sql2 = $db->Prepare("   SELECT *
                              FROM linea li
                              WHERE li.estado <> '0'
                         ");
     $rs2 = $db->GetAll($sql2);*/

     $smarty = new Smarty;

     $smarty->assign("tipo_perfil", $rs);
     //$smarty->assign("color", $rs1);
     //$smarty->assign("linea_perfil", $rs2);
     $smarty->assign("direcc_css", $direc_css);
     $smarty->display("rpt_perfiles_tipo_perfil.tpl");
 ?>
