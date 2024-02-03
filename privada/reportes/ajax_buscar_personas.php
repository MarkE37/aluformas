<?php
session_start();
require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$paterno = strip_tags(stripslashes($_POST["paterno"]));
$materno = strip_tags(stripslashes($_POST["materno"]));
$nombres = strip_tags(stripslashes($_POST["nombres"]));
$ci = strip_tags(stripslashes($_POST["ci"]));

if ($paterno or $materno or $nombres or $ci) {
     $sql3 = $db->Prepare("   SELECT *
                              FROM personas
                              WHERE ap LIKE ?
                              AND am LIKE ?
                              AND nombre LIKE ?
                              AND ci LIKE ?
                              AND estado <> '0'
     ");
     $rs3 = $db->GetAll($sql3, array($paterno."%", $materno."%", $nombres."%", $ci."%"));

     if ($rs3) {
               echo "     <center>
               			<table class='listado'>
                                   <thead>
                                        <tr>
                                             <th>NRO</th><th>CI</th><th>NOMBRES</th><th>AP</th><th>AM</th><th>GENERO</th><th>seleccione</th>
                                        </tr>
                                   </thead>";
                              $num = 1;
               			foreach ($rs3 as $k => $fila){
               				$str = $fila["ci"];
               				$str1 = $fila["nombre"];
               				$str2 = $fila["ap"];
               				$str3 = $fila["am"];
               echo "			<tr>
                                        <td>".$num."</td>
               					<td align='center'>".resaltar($ci,$str)."</td>
                                        <td>".resaltar($nombres, $str1)."</td>
               					<td>".resaltar($paterno, $str2)."</td>
               					<td>".resaltar($materno, $str3)."</td>
                                        <td align='center'>".$fila["genero"]."</td>
                                        <td align='center'><input type='radio' name='seleccione' value='".$fila['id_persona']."' onclick='mostrar(".$fila['id_persona'].")'></td>
               				</tr>";
                              $num++;
               			}
               echo "		</table>
               		</center>";
     } else {
          echo "<center><h2> LA PERSONA NO EXISTE!!</h2></center>";
     }
}


 ?>
