<?php
session_start();
require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");
require_once("../libreria_menu.php");
require_once("../../paginacion.inc.php");

$smarty = new Smarty;

contarRegistros($db, "cotizaciones");

paginacion("cotizaciones.php?", $smarty);

$sql3 = $db->Prepare("   SELECT emp.nombre AS empleado, cli.nombre AS cliente, cot.fecha, cot.precio_final, cot.id_cotizacion
                         FROM cotizaciones cot
                         INNER JOIN empleados emp ON cot.id_empleado = emp.id_empleado
                         INNER JOIN clientes cli ON cot.id_cliente = cli.id_cliente
                         WHERE cot.estado <> '0'
                         ORDER BY cot.fecha ASC
                         LIMIT ? OFFSET ?
				  ");
                      
$smarty->assign("cotizaciones", $db->GetAll($sql3, array($nElem, $regIni)));
$smarty->assign("direc_css", $direc_css);
$smarty->display("cotizaciones.tpl");
?>
