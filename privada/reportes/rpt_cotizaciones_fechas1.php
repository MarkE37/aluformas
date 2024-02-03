<?php
     session_start();

     require_once("../../smarty/Smarty.class.php");
     require_once("../../conexion.php");

     $fecha1 = $_REQUEST["fecha1"];
     $fecha2 = $_REQUEST["fecha2"];
     $smarty = new Smarty;
     $sql = $db->Prepare("    SELECT emp.nombre AS empleado, cli.nombre AS cliente, cot.fec_insercion, cot.precio_final
                              FROM cotizaciones cot
                              INNER JOIN empleados emp ON cot.id_empleado = emp.id_empleado
                              INNER JOIN clientes cli ON cot.id_cliente = cli.id_cliente
                              WHERE cot.fec_insercion BETWEEN ? AND ?
                              AND cot.estado <> '0'
                         ");
     $rs = $db->GetAll($sql, array($fecha1, $fecha2));

     $sql1 = $db->Prepare("   SELECT *
                              FROM vidrieria vid
                              WHERE vid.id_vidrieria = 1
                         ");
     $rs1 = $db->GetAll($sql1);
     $nombre = $rs1[0]["nombre"];
     $logo_agencia = $rs1[0]["logo_agencia"];

     $smarty->assign("rpt_cotizaciones_fechas", $rs);
     $smarty->assign("logo_agencia", $logo_agencia);
     $smarty->assign("fecha1", $fecha1);
     $smarty->assign("fecha2", $fecha2);

     $smarty->assign("direc_css", $direc_css);
     $smarty->display("rpt_cotizaciones_fechas1.tpl");

?>
