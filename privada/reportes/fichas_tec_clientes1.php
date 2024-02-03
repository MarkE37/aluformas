<?php
     session_start();
     require_once("../../smarty/Smarty.class.php");
     require_once("../../conexion.php");

     $id_cliente = $_REQUEST["id_clientes1"];

     $smarty = new Smarty;

     $sql = $db->Prepare("    SELECT *
                              FROM clientes
                              WHERE id_cliente = ?
                              AND estado <> '0'
                         ");
     $rs = $db->GetAll($sql, array($id_cliente));

     $smarty->assign("clientes", $rs);
     $smarty->assign("direc_css", $direc_css);
     $smarty->display("fichas_tec_clientes1.tpl");
 ?>
