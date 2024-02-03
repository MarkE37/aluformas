<?php
     session_start();
     require_once("../../smarty/Smarty.class.php");
     require_once("../../conexion.php");
     require_once("../libreria_menu.php");

     $smarty = new Smarty;

     $smarty->assign("direcc_css", $direc_css);
     $smarty->display("rpt_perfiles_linea.tpl");
 ?>
