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
                         <h2>PERSONAS -- GENERO</h2>
                    </td>
               </tr>
          </table>
          <br>
          <center>
               <table border="1">
                    <tr>
                         <th>NRO</th><th>AP</th><th>AM</th><th>NOMBRES</th><th>GENERO</th>
                    </tr>
                    {assign var="b" value="1"}
                    {foreach item=r from=$personas_genero1}
                    <tr>
                         <td align="center">{$b}</td>
                         <td>{$r.nombre}</td>
                         <td>{$r.ap}</td>
                         <td>{$r.am}</td>
                         <td>{if $r.genero == 'F'}Femenino{else}Masculino{/if}</td>
                    {assign var="b" value=$b+1}
                    {/foreach}
                    </tr>
               </table>
               <br><br>
               <b>Fecha : </b> {$fecha}
          </center>
     </body>
</html>
