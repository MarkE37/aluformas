<?php
     session_start();

     require_once("../../smarty/Smarty.class.php");
     require_once("../../conexion.php");

     $__id_persona = $_REQUEST["id_persona"];

     $smarty = new Smarty;

     $sql = $db->Prepare("    SELECT *
                              FROM usuarios
                              WHERE id_persona = ?
                              AND estado <> '0'
     ");
     $rs = $db->GetAll($sql, array($__id_persona));

     if(!$rs){
          $reg = array();
          $reg["estado"] = '0';
          $reg["_id_usuario"] = $_SESSION["sesion_id_usuario"];
          $rs1 = $db->AutoExecute("personas", $reg, "UPDATE", "id_persona='".$__id_persona."'");
          header("Location:personas.php");
          exit();
     } else {
          $smarty->assign("mensaje", "ERROR: Los datos no se eliminaron!!!!!!");
          $smarty->assign("direc_css", $direc_css);
          $smarty->display("personas_eliminar.tpl");
     }
 ?>
