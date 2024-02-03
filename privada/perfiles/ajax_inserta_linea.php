<?php
     session_start();
     require_once("../../smarty/Smarty.class.php");
     require_once("../../conexion.php");


     $linea1 = $_POST["linea1"];

     $reg = array();
	$reg["linea"] = $linea1;
	$reg["fec_insercion"] = date("Y-m-d H:i:s");
	$reg["estado"] = '1';
	$reg["usuario"] = $_SESSION["sesion_id_usuario"];
	$rs1 = $db->AutoExecute("linea_perfil",$reg, "INSERT");

 ?>
