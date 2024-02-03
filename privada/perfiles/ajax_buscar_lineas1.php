<?php
session_start();
require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$id_linea = $_POST["id_linea"];
$sql3 = $db->Prepare("   SELECT *
                         FROM linea_perfil
                         WHERE id_linea_perfil = ?
                         AND estado <> '0'
                    ");
$rs3 = $db->GetAll($sql3, array($id_linea));

echo "         <center>
                    <table width='60%' border='1'>
                         <tr>
                              <th colspan='4'> linea</th>";
foreach ($rs3 as $k => $fila) {
     echo "
                              <td align='center'>".$fila["linea"]."</td>
                         </tr>";
}
echo "              </table>
               </center>";
 ?>
