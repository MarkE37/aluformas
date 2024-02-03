<?php
     session_start();

     require_once("../../smarty/Smarty.class.php");
     require_once("../../conexion.php");

     $smarty = new Smarty;

     $sql = $db->Prepare("    SELECT tp.nombre, co.nombre AS color, li.linea, per.largo
                              FROM perfiles per
                              INNER JOIN tipo_perfil tp ON per.id_tipo_perfil = tp.id_tipo_perfil
                              INNER JOIN color co ON per.id_color = co.id_color
                              INNER JOIN linea_perfil li ON per.id_linea_perfil = li.id_linea_perfil
                              WHERE per.estado <> 0
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

     $smarty->assign("RTP_perfiles", $rs);
     $smarty->assign("logo_agencia", $logo_agencia);
     $smarty->assign("fecha", $fecha);

     $smarty->assign("direc_css", $direc_css);
     $smarty->display("RTP_perfiles1.tpl");

?>
