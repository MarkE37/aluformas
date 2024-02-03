<?php
     session_start();

     require_once("../../smarty/Smarty.class.php");
     require_once("../../conexion.php");
     require_once("../libreria_menu.php");

     $__id_propietario = $_REQUEST["id_proveedor"];

     $smarty = new Smarty;

     $sql = $db->Prepare("    SELECT *
                              FROM proveedores
                              WHERE id_proveedor = ?
     ");

     $rs = $db->GetAll($sql, array($__id_propietario));
     $smarty->assign("proveedores", $rs);
     $smarty->assign("direc_css", $direc_css);
     $smarty->display("proveedor_modificar.tpl");
?>
