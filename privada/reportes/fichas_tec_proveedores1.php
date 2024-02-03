<?php
     session_start();
     require_once("../../smarty/Smarty.class.php");
     require_once("../../conexion.php");

     $id_cliente = $_REQUEST["id_proveedores1"];

     $smarty = new Smarty;

     $sql = $db->Prepare("    SELECT *
                              FROM proveedores
                              WHERE id_proveedor = ?
                              AND estado <> '0'
                         ");
     $rs = $db->GetAll($sql, array($id_cliente));

     $smarty->assign("proveedores", $rs);
     $smarty->assign("direc_css", $direc_css);
     $smarty->display("fichas_tec_proveedores1.tpl");
 ?>
