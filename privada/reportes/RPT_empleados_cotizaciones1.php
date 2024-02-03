<?php
     session_start();

     require_once("../../smarty/Smarty.class.php");
     require_once("../../conexion.php");

     $smarty = new Smarty;

     $sql = $db->Prepare("    SELECT emp.nombre, COUNT(cot.id_cotizacion) AS cant_cotizaciones, SUM(cot.precio_final) AS dinero_generado
                              FROM empleados emp
                              INNER JOIN cotizaciones cot ON emp.id_empleado = cot.id_cotizacion
                              GROUP BY cot.id_empleado
                              ORDER By dinero_generado DESC
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

     $smarty->assign("RTP_empleados_cotizaciones", $rs);
     $smarty->assign("logo_agencia", $logo_agencia);
     $smarty->assign("fecha", $fecha);
     
     $smarty->assign("direc_css", $direc_css);
     $smarty->display("RTP_empleados_cotizaciones1.tpl");

?>
