<?php
     session_start();

     require_once("../../smarty/Smarty.class.php");
     require_once("../../conexion.php");

     $smarty = new Smarty;

     $sql = $db->Prepare("    SELECT CONCAT_WS(' ', p.nombre, p.ap, p.am) AS nombre, u.usuario1
                              FROM personas p
                              INNER JOIN usuarios u ON u.id_persona = p.id_persona
                              WHERE p.estado <> '0'
                              AND u.estado <> '0'
                              ORDER BY (u.id_persona) DESC
                         ");
     $rs = $db->GetAll($sql);

     $sql1 = $db->Prepare("   SELECT *
                              FROM vidrieria vid
                              WHERE vid.id_vidrieria = 1
     ");
     $rs1 = $db->GetAll($sql1);
     $nombre = $rs1[0]["nombre"];
     $logo_agencia = $rs1[0]["logo_agencia"];
     $fecha = date("Y-m-d H:i:s");

     $smarty->assign("rpt_personas_usuarios", $rs);
     $smarty->assign("logo_agencia", $logo_agencia);
     $smarty->assign("fecha", $fecha);

     $smarty->assign("direc_css", $direc_css);
     $smarty->display("rpt_personas_usuarios1.tpl");

?>
