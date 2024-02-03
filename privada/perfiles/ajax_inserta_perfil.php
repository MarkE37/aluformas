<?php
     session_start();
     require_once("../../smarty/Smarty.class.php");
     require_once("../../conexion.php");


     $nombre1 = $_POST["nombre1"];

     $reg = array();
	$reg["nombre"] = $nombre1;
	$reg["fec_insercion"] = date("Y-m-d H:i:s");
	$reg["estado"] = '1';
	$reg["usuario"] = $_SESSION["sesion_id_usuario"];
	$rs1 = $db->AutoExecute("tipo_perfil",$reg, "INSERT");

 ?>
