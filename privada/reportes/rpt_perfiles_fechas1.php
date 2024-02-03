<?php
     session_start();

     require_once("../../smarty/Smarty.class.php");
     require_once("../../conexion.php");

     $fecha1 = $_REQUEST["fecha1"];
     $fecha2 = $_REQUEST["fecha2"];
     $smarty = new Smarty;

     $sql = $db->Prepare("    SELECT tp.nombre, co.nombre AS color, li.linea, per.largo, per.fec_insercion
                              FROM perfiles per
                              INNER JOIN tipo_perfil tp ON per.id_tipo_perfil = tp.id_tipo_perfil
                              INNER JOIN color co ON per.id_color = co.id_color
                              INNER JOIN linea_perfil li ON per.id_linea_perfil = li.id_linea_perfil
                              WHERE per.fec_insercion BETWEEN ? AND ?
                              AND per.estado <> '0'
                              ORDER BY per.fec_insercion ASC
                         ");
     $rs = $db->GetAll($sql, array($fecha1, $fecha2));

     $sql1 = $db->Prepare("   SELECT *
                              FROM vidrieria vid
                              WHERE vid.id_vidrieria = 1
                         ");
     $rs1 = $db->GetAll($sql1);
     $nombre = $rs1[0]["nombre"];
     $logo_agencia = $rs1[0]["logo_agencia"];

     $smarty->assign("rpt_perfiles_fechas", $rs);
     $smarty->assign("logo_agencia", $logo_agencia);
     $smarty->assign("fecha1", $fecha1);
     $smarty->assign("fecha2", $fecha2);

     $smarty->assign("direc_css", $direc_css);
     $smarty->display("rpt_perfiles_fechas1.tpl");

?>
