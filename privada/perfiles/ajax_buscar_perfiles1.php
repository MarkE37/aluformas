<?php
session_start();
require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$id_tipo_perfil = $_POST["id_tipo_perfil"];
$sql3 = $db->Prepare("   SELECT *
                         FROM tipo_perfil
                         WHERE id_tipo_perfil = ?
                         AND estado <> '0'
                    ");
$rs3 = $db->GetAll($sql3, array($id_tipo_perfil));

echo "         <center>
                    <table width='60%' border='1'>
                         <tr>
                              <th colspan='4'> Tipo de Perfil</th>";
foreach ($rs3 as $k => $fila) {
     echo "
                              <td align='center'>".$fila["nombre"]."</td>
                         </tr>";
}
echo "              </table>
               </center>";
 ?>
