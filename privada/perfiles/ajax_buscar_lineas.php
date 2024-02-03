<?php
session_start();
require_once("../../smarty/Smarty.class.php");
require_once("../../conexion.php");
require_once("../../resaltarBusqueda.inc.php");

$nombre = strip_tags(stripslashes($_POST["nombre"]));

if ($nombre) {
     $sql3 = $db->Prepare("   SELECT *
                              FROM linea_perfil
                              WHERE linea LIKE ?
                              AND estado <> '0'
     ");
     $rs3 = $db->GetAll($sql3, array($nombre."%"));

     if ($rs3) {
               echo "     <center>
               			<table width='60%' border='2'>
                                   <thead>
                                        <tr>
                                             <th>NOMBRE</th><th>?</th>
                                        </tr>
                                   </thead>";
               			foreach ($rs3 as $k => $fila){
               				$str = $fila["linea"];
               echo "			<tr>
               					<td align='center'>".resaltar($nombre,$str)."</td>
               					<td align='center'>
               						<input type='radio' name='opcion' value='' onClick='buscar_linea(".$fila["id_linea_perfil"].")'>
               					</td>
               				</tr>";
               			}
               echo "		</table>
               		</center>";
     } else {
          echo "<center><b> LA LINEA DE PERFIL NO EXISTE!!</b></center>";
          echo "<center>
               <table>
                    <tr>
                         <td> <b>Nuevo linea</b> </td>
                         <td><input type='text' name='linea1' size='10'></td>
                    </tr>
                    <tr>
                         <td align='center' colspan='2'>
                              <input type='button' value='ADICIONAR' onClick='insertar_linea()'>
                         </td>
                    </tr>
               </table>
          </center>";
     }
}


 ?>
