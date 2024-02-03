<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
          <meta charset="utf-8">
          <link rel="stylesheet" href="../{$direc_css}" type="text/css">
          <script type="text/javascript" src="js/expresiones_regulares.js"></script>
          <script type="text/javascript" src="js/validar_usuario.js"></script>
     </head>
     <body>
          <br><br><br><br>
          <center>
               <h2>MODIFICAR USUARIO</h2>
               <form action="usuario_modificar1.php" method="post" name="formu">
                    <table>
                         <tr>
                              <th align="right">Persona (*)</th><th align="top">:</th>
                              <td>
                                   <select name="id_persona">
                                        {foreach item=r from=$persona}
                                        <option value="{$r.id_persona}">{$r.ap} - {$r.am} - {$r.nombre}</option>
                                        {/foreach}
                                        <!--{foreach item=r from=$personas}
                                        <option value="{$r.id_persona}">{$r.ap} - {$r.am} - {$r.nombre}</option>
                                        {/foreach}-->
                                   </select>
                              </td>
                         </tr>
                         {foreach item=r from=$usuario}
                         <tr>
                              <th align="left">Usuario (*)</th><th>:</th>
                              <td><input type="text" name="usuario1" value="{$r.usuario1}"></td>
                         </tr>
                         <tr>
                              <th align="left">Clave (*)</th><th>:</th>
                              <td><input type="password" name="clave"></td>
                         </tr>
                         <tr>
                              <td align="center" colspan="3">
                                   <input type="hidden" name="accion" value="" ="">
                                   <input type="hidden" name="id_usuario" value="{$r.id_usuario}">
                                   <input type="button" name="Aceptar" value="Aceptar" onclick="validar();">
                                   <input type="button" name="Cancelar" value="Cancelar" onclick="javascript:location.href='usuarios.php'">
                              </td>
                         </tr>
                         {/foreach}
                         <tr>
                              <td colspan="3" align="center"> <b>(*)Campos Obligatorios</b> </td>
                         </tr>
                    </table>
               </form>
          </center>
     </body>
</html>
