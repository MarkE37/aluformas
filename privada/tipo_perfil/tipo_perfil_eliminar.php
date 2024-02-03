<?php
     session_start();

     require_once("../../smarty/Smarty.class.php");
     require_once("../../conexion.php");

     $__id_tipo_perfil = $_REQUEST["id_tipo_perfil"];

     $smarty = new Smarty;

     $sql = $db->Prepare("    SELECT *
                              FROM tipo_perfil
                              WHERE id_tipo_perfil = {$__id_tipo_perfil}
                              AND estado <> '0'
     ");
     $rs = $db->GetAll($sql, array($__id_tipo_perfil));

     if(!$rs){
          $reg = array();
          $reg["estado"] = '0';
          $reg["_id_usuario"] = $_SESSION["sesion_id_usuario"];
          $rs1 = $db->AutoExecute("tipo_perfil", $reg, "UPDATE", "id_tipo_perfil='".$__id_tipo_perfil."'");
          header("Location:tipo_perfil.php");
          exit();
     } else {
          $smarty->assign("mensaje", "ERROR: Los datos no se eliminaron!!!!!!");
          $smarty->assign("direc_css", $direc_css);
          $smarty->display("tipo_perfil_eliminar.tpl");
     }
 ?>
