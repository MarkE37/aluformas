<?php
     session_start();

     require_once("../../smarty/Smarty.class.php");
     require_once("../../conexion.php");

     $__id_color = $_REQUEST["id_color"];

     $smarty = new Smarty;

     $sql = $db->Prepare("    SELECT *
                              FROM color
                              WHERE id_color = {$__id_color}
                              AND estado <> '0'
     ");
     $rs = $db->GetAll($sql, array($__id_color));

     if(!$rs){
          $reg = array();
          $reg["estado"] = '0';
          $reg["_id_usuario"] = $_SESSION["sesion_id_usuario"];
          $rs1 = $db->AutoExecute("color", $reg, "UPDATE", "id_color='".$__id_color."'");
          header("Location:color.php");
          exit();
     } else {
          $smarty->assign("mensaje", "ERROR: Los datos no se eliminaron!!!!!!");
          $smarty->assign("direc_css", $direc_css);
          $smarty->display("color_eliminar.tpl");
     }
 ?>
