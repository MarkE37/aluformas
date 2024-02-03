<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
          <link rel="stylesheet" href="../{$direc_css}" type="text/css">
          <script type="text/javascript" src="js/expresiones_regulares.js"></script>
          <script type="text/javascript" src="js/validar_perfil.js"></script>
     </head>
     <body>
          <br><br><br><br>
          <center>
               <h2>MODIFICAR PERFILES</h2>
               <form action="perfil_modificar1.php" method="post" name="formu">
                    <table>
                         <tr>
                              <th align="right">tipo de perfil (*)</th><th align="top">:</th>
                              <td>
                                   <select name="tipo_perfil">
                                        {foreach item=r from=$tipoPerfil}
                                        <option value="{$r.id_tipo_perfil}">{$r.nombre}</option>
                                        {/foreach}
                                        {foreach item=r from=$tipoPerfiles}
                                        <option value="{$r.id_tipo_perfil}">{$r.nombre}</option>
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
                         <tr>
                              <th align="right">Linea de Perfil (*)</th><th align="top">:</th>
                              <td>
                                   <select name="linea_perfil">
                                        {foreach item=r from=$lineaPerfil}
                                        <option value="{$r.id_linea_perfil}">{$r.linea}</option>
                                        {/foreach}
                                        {foreach item=r from=$lineaPerfiles}
                                        <option value="{$r.id_linea_perfil}">{$r.linea}</option>
                                        {/foreach}
                                   </select>
                              </td>
                         </tr>
                         {foreach item=r from=$perfil}
                         <tr>
                              <th align="left">Largo</th><th>:</th>
                              <td> <input type="text" name="largo" onkeyup="this.value=this.value.toUpperCase()" value="{$r.largo}"> </td>
                         </tr>
                         <tr>
                              <th align="left">precio</th><th>:</th>
                              <td> <input type="text" name="precio" onkeyup="this.value=this.value.toUpperCase()" value="{$r.precio_perfil}"> </td>
                         </tr>
                         <tr>
                              <td align="center" colspan="3">
                                   <input type="hidden" name="accion" value="">
                                   <input type="hidden" name="id_perfil" value="{$r.id_perfil}">
                                   <input type="button" name="Aceptar" value="Aceptar" onclick="validar();">
                                   <input type="button" name="Cancelar" value="Cancelar" onclick="javascript:location.href='perfiles.php';">
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
