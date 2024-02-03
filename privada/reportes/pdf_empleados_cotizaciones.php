<?php ob_start();

require_once("../../conexion.php");

$sql = $db->Prepare("    SELECT emp.nombre as nombre_emp, cli.nombre as nombre_cli, cli.telefono, coti.fecha, coti.precio_final
                         FROM cotizaciones coti, empleados emp, clientes cli
                         where coti.id_empleado = emp.id_empleado
                         AND coti.id_cliente = cli.id_cliente
                         AND coti.estado <> '0'
                         AND emp.estado <> '0'
                         AND cli.estado <>'0'
				");
$rs = $db->GetAll($sql);
$codigo_html ='
<!DOCTYPE html>
<html>
<head>
     <link rel="stylesheet" href="../../{$direc_css}" type="text/css">
</head>
<body>
     <div class="normal">
	<table width="100%" border="0">
		<tr>
			<td align="left">Empleados</td>
			<td align="center" width="80%"><h1>RPT empleados cotizaciones</h1></td>
		</tr>
	</table>
     </div>
	<br>
     <div class="listado">
	<center>
		<table border="1">
			<tr>
				<th>NRO</th>
                    <th>NOMBRE</th>
                    <th>CLIENTE</th>
                    <th>TELF DE CLIENTE</th>
                    <th>FECHA</th>
                    <th>PRECIO FINAL</th>
			</tr>';
			if($rs){
				$b = 1;
				foreach($rs as $k => $fila){
					$codigo_html.='<tr>
										<td>'.$b.'</td>
										<td>'.$fila["nombre_emp"].'</td>
										<td>'.$fila["nombre_cli"].'</td>
										<td>'.$fila["telefono"].'</td>
										<td>'.$fila["fecha"].'</td>
										<td>'.$fila["precio_final"].'</td>
									</tr>';
                                             $b++;
                    }
			}
			$codigo_html.='</table></center></div>';
?>
<?php
     require_once("../../dompdf1/autoload.inc.php");
     use Dompdf\Dompdf;
     $dompdf = new DOMPDF();

     $dompdf->load_html($codigo_html);
     $dompdf->render();
     $pdf = $dompdf->output();
     $filename = "ejemplo".date('Y-m-d_H-m-s').".pdf";
     file_put_contents($filename, $pdf);
     $dompdf->stream($pdf);
?>
