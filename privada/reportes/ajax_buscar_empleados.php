<?php
session_start();
require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$nombre = strip_tags(stripslashes($_POST["nombre"]));
$ci = strip_tags(stripslashes($_POST["ci"]));
$telefono = strip_tags(stripslashes($_POST["telefono"]));

if ($nombre or $ci or $telefono) {
     $sql3 = $db->Prepare("   SELECT *
                              FROM empleados
                              WHERE nombre LIKE ?
                              AND ci LIKE ?
                              AND telefono LIKE ?
                              AND estado <> '0'
     ");
     $rs3 = $db->GetAll($sql3, array($nombre."%", $ci."%", $telefono."%"));

     if ($rs3) {
               echo "     <center>
               			<table class='listado'>
                                   <thead>
                                        <tr>
                                             <th>NRO</th><th>NOMBRES</th><th>CI</th><th>TELEFONO</th><th>seleccione</th>
                                        </tr>
                                   </thead>";
                              $num = 1;
               			foreach ($rs3 as $k => $fila){
               				$str = $fila["nombre"];
               				$str1 = $fila["ci"];
               				$str2 = $fila["telefono"];
               echo "			<tr>
                                        <td>".$num."</td>
               					<td align='center'>".resaltar($nombre,$str)."</td>
               					<td>".resaltar($ci, $str1)."</td>
               					<td>".resaltar($telefono, $str2)."</td>
                                        <td align='center'><input type='radio' name='seleccione' value='".$fila['id_empleado']."' onclick='mostrar(".$fila['id_empleado'].")'></td>
               				</tr>";
                              $num++;
               			}
               echo "		</table>
               		</center>";
     } else {
          echo "<center><h2> EL EMPLEADO NO EXISTE!!</h2></center>";
     }
}


 ?>
