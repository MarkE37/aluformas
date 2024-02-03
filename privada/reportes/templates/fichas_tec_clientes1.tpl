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
                         <h2>FICHA TECNICA DE CLIENTES</h2>
                    </td>
               </tr>
          </table>
          <br>
          <center>
               <table border="1">
                    <tr>
                         <td>
                              <table border="0">
                              {foreach item=r from=$clientes}
                                   <tr>
                                        <th align="right">Nombre</th><th>:</th>
                                        <td> <input type="text" name="ci" value="{$r.nombre}" disabled=""> </td>
                                   </tr>
                                   <tr>
                                        <th align="right">direccion</th><th>:</th>
                                        <td> <input type="text" name="direccion" value="{$r.direccion}" disabled=""> </td>
                                   </tr>
                                   <tr>
                                        <th align="right">Telefono</th><th>:</th>
                                        <td> <input type="text" name="ci" value="{$r.telefono}" disabled=""> </td>
                                   </tr>
                              {/foreach}
                              </table>
                         </td>
                    </tr>
               </table>
          </center>
     </body>
</html>
