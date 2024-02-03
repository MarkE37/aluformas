<?php
     session_start();

     require_once("../../smarty/Smarty.class.php");
     require_once("../../conexion.php");

     $__id_tipo_vidrio = $_REQUEST["id_tipo_vidrio"];

     $smarty = new Smarty;

     $sql = $db->Prepare("    SELECT *
                              FROM tipo_vidrio
                              WHERE id_tipo_vidrio = {$__id_tipo_vidrio}
                              AND estado <> '0'
     ");
     $rs = $db->GetAll($sql, array($__id_tipo_vidrio));

     if(!$rs){
          $reg = array();
          $reg["estado"] = '0';
          $reg["_id_usuario"] = $_SESSION["sesion_id_usuario"];
          $rs1 = $db->AutoExecute("tipo_vidrio", $reg, "UPDATE", "id_tipo_vidrio='".$__id_tipo_vidrio."'");
          header("Location:tipo_vidrio.php");
          exit();
     } else {
          $smarty->assign("mensaje", "ERROR: Los datos no se eliminaron!!!!!!");
          $smarty->assign("direc_css", $direc_css);
          $smarty->display("tipo_vidrio_eliminar.tpl");
     }
 ?>
