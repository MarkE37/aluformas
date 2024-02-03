<?php
     session_start();

     require_once("../../smarty/Smarty.class.php");
     require_once("../../conexion.php");
     require_once("../libreria_menu.php");

     $smarty = new Smarty;

     $sql = $db->Prepare("    SELECT emp.nombre, COUNT(cot.id_cotizacion) AS cant_cotizaciones, SUM(cot.precio_final) AS dinero_generado
                              FROM empleados emp
                              INNER JOIN cotizaciones cot ON emp.id_empleado = cot.id_cotizacion
                              GROUP BY cot.id_empleado
                              ORDER By dinero_generado DESC
     ");
     $rs = $db->GetAll($sql);

     $smarty->assign("RTP_empleados_cotizaciones", $rs);
     $smarty->assign("direc_css", $direc_css);
     $smarty->display("RPT_empleados_cotizaciones.tpl");

?>
