<?php
     session_start();

     require_once("../../smarty/Smarty.class.php");
     require_once("../../conexion.php");

     $__id_perfil = $_REQUEST["id_perfil"];

     $smarty = new Smarty;

     $sql = $db->Prepare("    SELECT *
                              FROM perfiles
                              WHERE id_perfil = {$__id_perfil}
                              AND estado <> '0'
     ");
     $rs = $db->GetAll($sql, array($__id_perfil));

     if(!$rs){
          $reg = array();
          $reg["estado"] = '0';
          $reg["_id_usuario"] = $_SESSION["sesion_id_usuario"];
          $rs1 = $db->AutoExecute("perfiles", $reg, "UPDATE", "id_perfil='".$__id_perfil."'");
          header("Location:perfiles.php");
          exit();
     } else {
          $smarty->assign("mensaje", "ERROR: Los datos no se eliminaron!!!!!!");
          $smarty->assign("direc_css", $direc_css);
          $smarty->display("perfil_eliminar.tpl");
     }
 ?>
