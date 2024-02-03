<?php
     session_start();

     require_once("../../smarty/Smarty.class.php");
     require_once("../../conexion.php");
     require_once("../libreria_menu.php");

     $__id_propietario = $_REQUEST["id_cliente"];

     $smarty = new Smarty;

     $sql = $db->Prepare("    SELECT *
                              FROM clientes
                              WHERE id_cliente = ?
     ");

     $rs = $db->GetAll($sql, array($__id_propietario));
     $smarty->assign("clientes", $rs);
     $smarty->assign("direc_css", $direc_css);
     $smarty->display("cliente_modificar.tpl");
?>
