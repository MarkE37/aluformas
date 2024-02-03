<?php
session_start();
require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$nombres = strip_tags(stripslashes($_POST["nombres"]));
$telefono = strip_tags(stripslashes($_POST["telefono"]));
$ci = strip_tags(stripslashes($_POST["ci"]));

if ($nombres or $telefono or $ci) {
     $sql3 = $db->Prepare("   SELECT *
                              FROM empleados
                              WHERE nombre LIKE ?
                              AND telefono LIKE ?
                              AND ci LIKE ?
                              AND estado <> '0'
     ");
     $rs3 = $db->GetAll($sql3, array($nombres."%", $telefono."%", $ci."%"));

     if ($rs3) {
               echo "     <center>
               			<table class='listado'>
                                   <thead>
                                        <tr>
                                             <th>NRO</th><th>NOMBRES</th><th>Telefono</th><th>ci</th><th align='center'><img src='../../img/modificar.gif' height='30px'></th><th align='center'><img src='../../img/borrar.gif' height='30px'></th>
                                        </tr>
                                   </thead>";
                              $num = 1;
               			foreach ($rs3 as $k => $fila){
               				$str1 = $fila["nombre"];
               				$str2 = $fila["telefono"];
               				$str3 = $fila["ci"];
               echo "			<tr>
                                        <td>".$num."</td>
               					<td align='center'>".resaltar($nombres,$str1)."</td>
               					<td>".resaltar($telefono, $str2)."</td>
               					<td>".resaltar($ci, $str3)."</td>
               					<td align='center'>
               						<form name='formModif".$fila['id_empleado']."' action='empleado_modificar.php' method='post'>
               							<input type='hidden' name='id_empleado' value='".$fila['id_empleado']."'>
               							<a href='javascript:document.formModif".$fila['id_empleado'].".submit();' title='Modificar empleado Sistema'>Modificar >>></a>
               						</form>
               					</td>
               					<td align='center'>
               						<form name='formElimi".$fila['id_empleado']."' action='empleado_eliminar.php' method='post'>
               							<input type='hidden' name='id_empleado' value='".$fila['id_empleado']."'>
               							<a href='javascript:document.formElimi".$fila['id_empleado'].".submit();' title='Eliminar empleado Sistema'
               							onclick='javascript:return(confirm(Desea Realmente Eliminar a el empleado ..?));'
               							location.href='empleado_eliminar.php'>Eliminar >>></a>
               						</form>
               					</td>
               				</tr>";
                              $num++;
               			}
               echo "		</table>
               		</center>";
     } else {
          echo "<center><b> EL EMPLEADO NO EXISTE!!</b></center>";
     }
}


 ?>
