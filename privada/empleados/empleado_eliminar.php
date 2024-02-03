<?php
     session_start();

     require_once("../../smarty/Smarty.class.php");
     require_once("../../conexion.php");

     $__id_empleado = $_REQUEST["id_empleado"];

     $smarty = new Smarty;

     $sql = $db->Prepare("    SELECT *
                              FROM cotizaciones
                              WHERE id_empleado = ?
                              AND estado <> '0'
     ");
     $rs = $db->GetAll($sql, array($__id_empleado));

     if(!$rs){
          $reg = array();
          $reg["estado"] = '0';
          $reg["_id_usuario"] = $_SESSION["sesion_id_usuario"];
          $rs1 = $db->AutoExecute("empleados", $reg, "UPDATE", "id_empleado='".$__id_empleado."'");
          header("Location:empleados.php");
          exit();
     } else {
          $smarty->assign("mensaje", "ERROR: Los datos no se eliminaron!!!!!!");
          $smarty->assign("direc_css", $direc_css);
          $smarty->display("empleado_eliminar.tpl");
     }
 ?>
