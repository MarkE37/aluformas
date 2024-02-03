<?php
     session_start();

     require_once("../../smarty/Smarty.class.php");
     require_once("../../conexion.php");

     $__id_cliente = $_REQUEST["id_cliente"];

     $smarty = new Smarty;

     $sql = $db->Prepare("    SELECT *
                              FROM cotizaciones
                              WHERE id_cliente = ?
                              AND estado <> '0'
     ");
     $rs = $db->GetAll($sql, array($__id_cliente));

     if(!$rs){
          $reg = array();
          $reg["estado"] = '0';
          $reg["_id_usuario"] = $_SESSION["sesion_id_usuario"];
          $rs1 = $db->AutoExecute("clientes", $reg, "UPDATE", "id_cliente='".$__id_cliente."'");
          header("Location:clientes.php");
          exit();
     } else {
          $smarty->assign("mensaje", "ERROR: Los datos no se eliminaron!!!!!!");
          $smarty->assign("direc_css", $direc_css);
          $smarty->display("cliente_eliminar.tpl");
     }
 ?>
