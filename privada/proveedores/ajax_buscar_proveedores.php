<?php
session_start();
require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$nombres = strip_tags(stripslashes($_POST["nombres"]));
$telefono = strip_tags(stripslashes($_POST["telefono"]));
$direccion = strip_tags(stripslashes($_POST["direccion"]));

if ($nombres or $telefono or $direccion) {
     $sql3 = $db->Prepare("   SELECT *
                              FROM proveedores
                              WHERE nombre LIKE ?
                              AND telefono LIKE ?
                              AND direccion LIKE ?
                              AND estado <> '0'
     ");
     $rs3 = $db->GetAll($sql3, array($nombres."%", $telefono."%", $direccion."%"));

     if ($rs3) {
               echo "     <center>
               			<table class='listado'>
                                   <thead>
                                        <tr>
                                             <th>NRO</th><th>NOMBRES</th><th>Telefono</th><th>direccion</th><th align='center'><img src='../../img/modificar.gif' height='30px'></th><th align='center'><img src='../../img/borrar.gif' height='30px'></th>
                                        </tr>
                                   </thead>";
                              $num = 1;
               			foreach ($rs3 as $k => $fila){
               				$str1 = $fila["nombre"];
               				$str2 = $fila["telefono"];
               				$str3 = $fila["direccion"];
               echo "			<tr>
                                        <td>".$num."</td>
               					<td align='center'>".resaltar($nombres,$str1)."</td>
               					<td>".resaltar($telefono, $str2)."</td>
               					<td>".resaltar($direccion, $str3)."</td>
               					<td align='center'>
               						<form name='formModif".$fila['id_proveedor']."' action='proveedor_modificar.php' method='post'>
               							<input type='hidden' name='id_proveedor' value='".$fila['id_proveedor']."'>
               							<a href='javascript:document.formModif".$fila['id_proveedor'].".submit();' title='Modificar proveedor Sistema'>Modificar >>></a>
               						</form>
               					</td>
               					<td align='center'>
               						<form name='formElimi".$fila['id_proveedor']."' action='proveedor_eliminar.php' method='post'>
               							<input type='hidden' name='id_proveedor' value='".$fila['id_proveedor']."'>
               							<a href='javascript:document.formElimi".$fila['id_proveedor'].".submit();' title='Eliminar proveedor Sistema'
               							onclick='javascript:return(confirm(Desea Realmente Eliminar a el proveedor ..?));'
               							location.href='proveedor_eliminar.php'>Eliminar >>></a>
               						</form>
               					</td>
               				</tr>";
                              $num++;
               			}
               echo "		</table>
               		</center>";
     } else {
          echo "<center><b> EL proveedor NO EXISTE!!</b></center>";
     }
}


 ?>
