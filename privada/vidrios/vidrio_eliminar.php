<?php
     session_start();

     require_once("../../smarty/Smarty.class.php");
     require_once("../../conexion.php");

     $__id_vidrio = $_REQUEST["id_vidrio"];

     $smarty = new Smarty;

     $sql = $db->Prepare("    SELECT *
                              FROM vidrios
                              WHERE id_vidrio = {$__id_vidrio}
                              AND estado <> '0'
     ");
     $rs = $db->GetAll($sql, array($__id_vidrio));

     if(!$rs){
          $reg = array();
          $reg["estado"] = '0';
          $reg["_id_usuario"] = $_SESSION["sesion_id_usuario"];
          $rs1 = $db->AutoExecute("vidrios", $reg, "UPDATE", "id_vidrio='".$__id_vidrio."'");
          header("Location:vidrios.php");
          exit();
     } else {
          $smarty->assign("mensaje", "ERROR: Los datos no se eliminaron!!!!!!");
          $smarty->assign("direc_css", $direc_css);
          $smarty->display("vidrio_eliminar.tpl");
     }
 ?>
