<html>
     <head>
          <script type="text/javascript">
               var ventanaCalendario = false;
               function imprimir(){
                    if (confirm(' Desea Imprimir ?')) {
                         window.print();
                    }
               }
          </script>
     </head>
     <body onclick="javascript:imprimir()">
          <div>
               <table width=100% border="0">
                    <tr>
                         <td width="33%">
                              <table align="right">
                                   <tr>
                                        <td>
                                             <img src="../../img/{$logo_agencia}" width="200">
                                        </td>
                                   </tr>
                              </table>
                         </td>
                         <td align="center" width="33%">
                              <h2>EMPLEADOS COTIZACIONES</h2>
                         </td>
                         <td align="center" width="33%"></td>
                    </tr>
               </table>
          </div>
          <br>
          <center>
               <div>
                    <table border="1px">
                         <thead>
                              <tr>
                                   <th>NRO</th>
                                   <th>EMPLEADO</th>
                                   <th width="180px">CANTIDAD COTIZACIONES</th>
                                   <th width="180px">DINERO GENERADO POR COT.</th>
                              </tr>
                         </thead>
                         {assign var="b" value="1"}
                         {foreach item=r from=$RTP_empleados_cotizaciones}
                              <tr>
                                   <td align="center">{$b}</td>
                                   <td>{$r.nombre}</td>
                                   <td>{$r.cant_cotizaciones}</td>
                                   <td>{$r.dinero_generado}</td>
                              </tr>
                         {assign var="b" value="`$b+1`"}
                         {/foreach}
                    </table>
                    <br><br>
                    <b>FECHA : {$fecha}</b>
               </div>
          </center>
     </body>
</html>
