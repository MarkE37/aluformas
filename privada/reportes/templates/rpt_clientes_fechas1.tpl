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
                              <h2>CLIENTES CON FECHAS</h2>
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
                                   <th>cliente</th>
                                   <th>telefono</th>
                                   <th>direccion</th>
                                   <th>FECHAS INSERCCION</th>
                              </tr>
                         </thead>
                         {assign var="b" value="1"}
                         {foreach item=r from=$rpt_clientes_fechas}
                              <tr>
                                   <td align="center">{$b}</td>
                                   <td>{$r.nombre}</td>
                                   <td>{$r.telefono}</td>
                                   <td>{$r.direccion}</td>
                                   <td>{$r.fec_insercion}</td>
                              </tr>
                         {assign var="b" value="`$b+1`"}
                         {/foreach}
                    </table>
                    <br><br>
                    <b>DEL : {$fecha1} A {$fecha2}</b>
               </div>
          </center>
     </body>
</html>
