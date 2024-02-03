<?php
     session_start();
     require_once("../../smarty/Smarty.class.php");
     require_once("../../conexion.php");

     $id_empleado = $_REQUEST["id_empleados1"];

     $smarty = new Smarty;

     $sql = $db->Prepare("    SELECT *
                              FROM empleados
                              WHERE id_empleado = ?
                              AND estado <> '0'
                         ");
     $rs = $db->GetAll($sql, array($id_empleado));

     $smarty->assign("empleados", $rs);
     $smarty->assign("direc_css", $direc_css);
     $smarty->display("fichas_tec_empleados1.tpl");
 ?>
