<?php
     session_start();
     require_once("../../smarty/Smarty.class.php");
     require_once("../../conexion.php");
     require_once("../libreria_menu.php");

     $sql = $db->Prepare("    SELECT co.id_color, co.nombre
                              FROM vidrios vi
                              INNER JOIN color co ON vi.id_color = co.id_color
                              WHERE vi.estado <> '0'
                              GROUP BY vi.id_color
                         ");
     $rs = $db->GetAll($sql);

     $smarty = new Smarty;

     $smarty->assign("colores", $rs);
     $smarty->assign("direcc_css", $direc_css);
     $smarty->display("rpt_vidrios_color.tpl");
 ?>
