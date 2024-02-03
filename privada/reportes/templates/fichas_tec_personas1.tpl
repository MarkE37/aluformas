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
                         <h2>FICHA TECNICA DE PERSONA</h2>
                    </td>
               </tr>
          </table>
          <br>
          <center>
               <table border="1">
                    <tr>
                         <td>
                              <table border="0">
                              {foreach item=r from=$personas}
                                   <tr>
                                        <th align="right">CI</th><th>:</th>
                                        <td> <input type="text" name="ci" value="{$r.ci}" disabled=""> </td>
                                   </tr>
                                   <tr>
                                        <th align="right">Nombres</th><th>:</th>
                                        <td> <input type="text" name="ci" value="{$r.nombre}" disabled=""> </td>
                                   </tr>
                                   <tr>
                                        <th align="right">Apellido Paterno</th><th>:</th>
                                        <td> <input type="text" name="ci" value="{$r.ap}" disabled=""> </td>
                                   </tr>
                                   <tr>
                                        <th align="right">Apellido Materno</th><th>:</th>
                                        <td> <input type="text" name="ci" value="{$r.am}" disabled=""> </td>
                                   </tr>
                                   <tr>
                                        <th align="right">Direccion</th><th>:</th>
                                        <td> <input type="text" name="ci" value="{$r.direccion}" disabled=""> </td>
                                   </tr>
                                   <tr>
                                        <th align="right">Telefono</th><th>:</th>
                                        <td> <input type="text" name="ci" value="{$r.telefono}" disabled=""> </td>
                                   </tr>
                                   <tr>
                                        <th align="right">genero</th><th>:</th>
                                        <td>
                                             {if $r.genero == 'M'} <input type="text" name="genero" value="Masculino" disabled="">{/if}
                                             {if $r.genero == 'F'} <input type="text" name="genero" value="Femenino" disabled="">{/if}
                                        </td>
                                   </tr>
                              {/foreach}
                              </table>
                         </td>
                    </tr>
               </table>
          </center>
     </body>
</html>
