<?php
     session_start();

     require_once("../../smarty/Smarty.class.php");
     require_once("../../conexion.php");

     $__id_linea_perfil = $_REQUEST["id_linea_perfil"];

     $smarty = new Smarty;

     $sql = $db->Prepare("    SELECT *
                              FROM linea_perfil
                              WHERE id_linea_perfil = {$__id_linea_perfil}
                              AND estado <> '0'
     ");
     $rs = $db->GetAll($sql, array($__id_linea_perfil));

     if(!$rs){
          $reg = array();
          $reg["estado"] = '0';
          $reg["_id_usuario"] = $_SESSION["sesion_id_usuario"];
          $rs1 = $db->AutoExecute("linea_perfil", $reg, "UPDATE", "id_linea_perfil='".$__id_linea_perfil."'");
          header("Location:linea_perfil.php");
          exit();
     } else {
          $smarty->assign("mensaje", "ERROR: Los datos no se eliminaron!!!!!!");
          $smarty->assign("direc_css", $direc_css);
          $smarty->display("linea_perfil_eliminar.tpl");
     }
 ?>
