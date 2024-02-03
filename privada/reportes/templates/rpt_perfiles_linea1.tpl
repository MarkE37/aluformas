<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
          <meta charset="utf-8">
          <script type="text/javascript">
               var ventanaCalendario = false;
               function imprimir(){
                    if (confirm(' Desea Imprimir?')) {
                         window.print();
                    }
               }
          </script>
     </head>
     <body style="cursor:pointer;cursor:hand" onclick="imprimir();">
          <table width="100%" border="0">
               <tr>
                    <td>
                         <img src="../../img/bitmap1.svg" width="70%">
                    </td>
                    <td align="center" width="80%">
                         <h2>perfiles -- linea</h2>
                    </td>
               </tr>
          </table>
          <br>
          <center>
               <table border="1">
                    <tr>
                         <th>NRO</th><th>Nombre</th><th>Linea</th><th>Color</th><th>Largo</th><th>precio</th>
                    </tr>
                    {assign var="b" value="1"}
                    {foreach item=r from=$perfiles_linea1}
                    <tr>
                         <td align="center">{$b}</td>
					<td>{$r.Nombre_Perfil}</td>
					<td>{$r.Linea_Perfil}</td>
					<td>{$r.Color}</td>
					<td>{$r.largo}</td>
					<td>{$r.Precio_de_Perfil}</td>
                    {assign var="b" value=$b+1}
                    {/foreach}
                    </tr>
               </table>
               <br><br>
               <b>Fecha : </b> {$fecha}
          </center>
     </body>
</html>
