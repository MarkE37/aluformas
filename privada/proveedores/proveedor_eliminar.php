<?php
     session_start();

     require_once("../../smarty/Smarty.class.php");
     require_once("../../conexion.php");

     $__id_proveedor = $_REQUEST["id_proveedor"];

     $smarty = new Smarty;

     $sql = $db->Prepare("    SELECT *
                              FROM proveedores
                              WHERE id_proveedor = {$__id_proveedor}
                              AND estado <> '0'
     ");
     $rs = $db->GetAll($sql, array($__id_proveedor));

     if(!$rs){
          $reg = array();
          $reg["estado"] = '0';
          $reg["_id_usuario"] = $_SESSION["sesion_id_usuario"];
          $rs1 = $db->AutoExecute("proveedores", $reg, "UPDATE", "id_proveedor='".$__id_proveedor."'");
          header("Location:proveedores.php");
          exit();
     } else {
          $smarty->assign("mensaje", "ERROR: Los datos no se eliminaron!!!!!!");
          $smarty->assign("direc_css", $direc_css);
          $smarty->display("proveedor_eliminar.tpl");
     }
 ?>
