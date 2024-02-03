<?php
     session_start();
     require_once("../../smarty/Smarty.class.php");
     require_once("../../conexion.php");
     require_once("../libreria_menu.php");

     $sql = $db->Prepare("    SELECT CONCAT_WS(' ', p.nombre, p.ap, p.am) AS nombre, u.usuario1
                              FROM personas p
                              INNER JOIN usuarios u ON u.id_persona = p.id_persona
                              WHERE p.estado <> '0'
                              AND u.estado <> '0'
                              ORDER BY (u.id_persona) DESC
                         ");
     $rs = $db->GetAll($sql);

     $smarty = new Smarty;

     $smarty->assign("rpt_personas_usuarios", $rs);
     $smarty->assign("direc_css", $direc_css);
     $smarty->display("rpt_personas_usuarios.tpl");
 ?>
