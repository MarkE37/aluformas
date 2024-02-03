<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
          <link rel="stylesheet" href="../{$direc_css}" type="text/css">
          <script type="text/javascript" src="js/expresiones_regulares.js"></script>
          <script type="text/javascript" src="js/validar_propietario.js"></script>
     </head>
     <body>
          <br><br><br><br>
          <center>
               <h2>MODIFICAR PROPIETARIO</h2>
               <form action="propietarios_modificar1.php" method="post" name="formu">
                    <table>
                         {foreach item=r from=$propietario}
                         <tr>
                              <th align="left">Nombre</th><th>:</th>
                              <td> <input type="text" name="nombre" onkeyup="this.value=this.value.toUpperCase()" value="{$r.nombre}"> </td>
                         </tr>
                         <tr>
                              <th align="left">CI</th><th>:</th>
                              <td> <input type="text" name="ci" onkeyup="this.value=this.value.toUpperCase()" value="{$r.ci}"> </td>
                         </tr>
                         <tr>
                              <th align="left">Telefono</th><th>:</th>
                              <td> <input type="text" name="telefono" value="{$r.telefono}"> </td>
                         </tr>
                         <tr>
                              <td align="center" colspan="3">
                                   <input type="hidden" name="accion" value="">
                                   <input type="hidden" name="id_propietario" value="{$r.id_propietario}">
                                   <input type="button" name="Aceptar" value="Aceptar" onclick="validar();">
                                   <input type="button" name="Cancelar" value="Cancelar" onclick="javascript:location.href='propietarios.php';">
                              </td>
                         </tr>
                         {/foreach}
                         <tr>
                              <td colspan="3" align="center"> <b>(*) Campos Obligatorios</b> </td>
                         </tr>
                    </table>
               </form>
          </center>
     </body>
</html>
