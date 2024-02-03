<?php
session_start();
require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$id_color = $_POST["id_color"];
$sql3 = $db->Prepare("   SELECT *
                         FROM color
                         WHERE id_color = ?
                         AND estado <> '0'
                    ");
$rs3 = $db->GetAll($sql3, array($id_color));

echo "         <center>
                    <table width='60%' border='1'>
                         <tr>
                              <th colspan='4'> COLOR</th>";
foreach ($rs3 as $k => $fila) {
     echo "
                              <td align='center'>".$fila["nombre"]."</td>
                         </tr>";
}
echo "              </table>
               </center>";
 ?>
