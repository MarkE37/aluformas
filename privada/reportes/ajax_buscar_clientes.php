<?php
session_start();
require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$nombre = strip_tags(stripslashes($_POST["nombre"]));
$direccion = strip_tags(stripslashes($_POST["direccion"]));
$telefono = strip_tags(stripslashes($_POST["telefono"]));

if ($nombre or $direccion or $telefono) {
     $sql3 = $db->Prepare("   SELECT *
                              FROM clientes
                              WHERE nombre LIKE ?
                              AND direccion LIKE ?
                              AND telefono LIKE ?
                              AND estado <> '0'
     ");
     $rs3 = $db->GetAll($sql3, array($nombre."%", $direccion."%", $telefono."%"));

     if ($rs3) {
               echo "     <center>
               			<table class='listado'>
                                   <thead>
                                        <tr>
                                             <th>NRO</th><th>NOMBRES</th><th>direccion</th><th>TELEFONO</th><th>seleccione</th>
                                        </tr>
                                   </thead>";
                              $num = 1;
               			foreach ($rs3 as $k => $fila){
               				$str = $fila["nombre"];
               				$str1 = $fila["direccion"];
               				$str2 = $fila["telefono"];
               echo "			<tr>
                                        <td>".$num."</td>
               					<td align='center'>".resaltar($nombre,$str)."</td>
               					<td>".resaltar($direccion, $str1)."</td>
               					<td>".resaltar($telefono, $str2)."</td>
                                        <td align='center'><input type='radio' name='seleccione' value='".$fila['id_cliente']."' onclick='mostrar(".$fila['id_cliente'].")'></td>
               				</tr>";
                              $num++;
               			}
               echo "		</table>
               		</center>";
     } else {
          echo "<h2> EL cliente NO EXISTE!!</h2>";
     }
}


 ?>
