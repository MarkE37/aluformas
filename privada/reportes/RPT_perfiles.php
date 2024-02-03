<?php
     session_start();

     require_once("../../smarty/Smarty.class.php");
     require_once("../../conexion.php");
     require_once("../libreria_menu.php");

     $smarty = new Smarty;

     $sql = $db->Prepare("    SELECT tp.nombre, co.nombre AS color, li.linea, per.largo
                              FROM perfiles per
                              INNER JOIN tipo_perfil tp ON per.id_tipo_perfil = tp.id_tipo_perfil
                              INNER JOIN color co ON per.id_color = co.id_color
                              INNER JOIN linea_perfil li ON per.id_linea_perfil = li.id_linea_perfil
                              WHERE per.estado <> 0
     ");
     $rs = $db->GetAll($sql);

     $smarty->assign("RTP_perfiles", $rs);
     $smarty->assign("direc_css", $direc_css);
     $smarty->display("RPT_perfiles.tpl");

?>
