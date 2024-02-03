<?php
     session_start();
     require_once("../../smarty/Smarty.class.php");
     require_once("../../conexion.php");

     $linea = $_REQUEST["linea"];

     $smarty = new Smarty;

     $sql = $db->Prepare("    SELECT pe.id_perfil, tp.id_tipo_perfil, lp.id_linea_perfil, co.id_color, tp.nombre AS Nombre_Perfil, lp.linea AS Linea_Perfil, co.nombre AS Color, pe.largo, pe.precio_perfil AS Precio_de_Perfil
     					FROM perfiles pe
     					INNER JOIN tipo_perfil tp ON pe.id_tipo_perfil = tp.id_tipo_perfil
     					INNER JOIN linea_perfil lp ON pe.id_linea_perfil = lp.id_linea_perfil
     					INNER JOIN color co ON pe.id_color = co.id_color
     					WHERE lp.linea = ?
                         ");
     $rs = $db->GetAll($sql, array($linea));

     $fecha = date("Y-m-d H:i:s");
     $smarty->assign("perfiles_linea1", $rs);
     $smarty->assign("fecha", $fecha);
     $smarty->assign("direc_css", $direc_css);
     $smarty->display("rpt_perfiles_linea1.tpl");
 ?>
