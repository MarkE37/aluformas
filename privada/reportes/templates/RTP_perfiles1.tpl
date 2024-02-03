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
                              <h2>Perfiles</h2>
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
                                   <th>Perfil</th>
                                   <th>Color</th>
                                   <th>Linea</th>
                                   <th>Medida(cm)</th>
                              </tr>
                         </thead>
                         {assign var="b" value="1"}
                         {foreach item=r from=$RTP_perfiles}
                              <tr>
                                   <td align="center">{$b}</td>
                                   <td>{$r.nombre}</td>
                                   <td>{$r.color}</td>
                                   <td>{$r.linea}</td>
                                   <td>{$r.largo}</td>
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
