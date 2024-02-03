<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
          <link rel="stylesheet" href="../{$direc_css}" type="text/css">
          <script type="text/javascript" src="js/expresiones_regulares.js"></script>
          <script type="text/javascript" src="js/validar_vidrio.js"></script>
     </head>
     <body>
          <br><br><br><br>
          <center>
               <h2>MODIFICAR VIDRIO</h2>
               <form action="vidrio_modificar1.php" method="post" name="formu">
                    <table>
                         <tr>
                              <th align="right">tipo de vidrio (*)</th><th align="top">:</th>
                              <td>
                                   <select name="tipo_vidrio">
                                        {foreach item=r from=$tipovidrio}
                                        <option value="{$r.id_tipo_vidrio}">{$r.nombre}</option>
                                        {/foreach}
                                        {foreach item=r from=$tipovidrios}
                                        <option value="{$r.id_tipo_vidrio}">{$r.nombre}</option>
                                        {/foreach}
                                   </select>
                              </td>
                         </tr>
                         <tr>
                              <th align="right">Color (*)</th><th align="top">:</th>
                              <td>
                                   <select name="color">
                                        {foreach item=r from=$color}
                                        <option value="{$r.id_color}">{$r.nombre}</option>
                                        {/foreach}
                                        {foreach item=r from=$colores}
                                        <option value="{$r.id_color}">{$r.nombre}</option>
                                        {/foreach}
                                   </select>
                              </td>
                         </tr>
                         {foreach item=r from=$vidrio}
                         <tr>
                              <th align="left">ancho</th><th>:</th>
                              <td> <input type="text" name="ancho" value="{$r.ancho}"> </td>
                         </tr>
                         <tr>
                              <th align="left">alto</th><th>:</th>
                              <td> <input type="text" name="alto" value="{$r.alto}"> </td>
                         </tr>
                         <tr>
                              <td align="center" colspan="3">
                                   <input type="hidden" name="accion" value="">
                                   <input type="hidden" name="id_vidrio" value="{$r.id_vidrio}">
                                   <input type="button" name="Aceptar" value="Aceptar" onclick="validar();">
                                   <input type="button" name="Cancelar" value="Cancelar" onclick="javascript:location.href='vidrios.php';">
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
