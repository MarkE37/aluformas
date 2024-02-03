<?php
     session_start();
     require_once("../../smarty/Smarty.class.php");
     require_once("../../conexion.php");

     $color = $_REQUEST["color"];

     $smarty = new Smarty;
     
     $sql = $db->Prepare("    SELECT co.nombre AS color, tv.nombre AS tipo_vidrio, vi.alto, vi.ancho
                              FROM vidrios vi
                              INNER JOIN tipo_vidrio tv ON vi.id_tipo_vidrio = tv.id_tipo_vidrio
                              INNER JOIN color co ON co.id_color = vi.id_color
                              WHERE vi.id_color = ?
                              AND vi.estado <> '0'
                         ");
     $rs = $db->GetAll($sql, array($color));
     $fecha = date("Y-m-d H:i:s");
     $smarty->assign("vidrios_color1", $rs);
     $smarty->assign("fecha", $fecha);
     $smarty->assign("direc_css", $direc_css);
     $smarty->display("rpt_vidrios_color1.tpl");
 ?>
