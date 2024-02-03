<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
          <link rel="stylesheet" href="../{$direcc_css}" type="text/css">
          <meta charset="utf-8">
          <script type="text/javascript">
               function validar(){
                    var tipo_perfil = document.formu.tipo_perfil.value;
                    if (tipo_perfil == "") {
                         alert("Debe especificar el parametro");
                         return;
                    }
                    ventanaCalendario = window.open("rpt_perfiles_tipo_perfil1.php?tipo_perfil=" + tipo_perfil , "calendario", "width=600, height=550, left=100, top=100, scrollbars=yes, menubars=no, statusbar=no, status=no, resizable=yes, location=no")
               }
          </script>
     </head>
     <body>
          <br><br><br><br>
          <center>
               <h2> REPORTES DE PERFILES POR TIPO DE PERFIL</h2>
               <form name="formu" method="post">
                    <table>
                         <tr>
                              <th>*Seleccione tipo_perfil</th><th>:</th>
                              <td>
                                   <select name="tipo_perfil">
                                        {foreach item=r from=$tipo_perfil}
                                        <option value="{$r.id_tipo_perfil}">{$r.nombre}</option>
                                        {/foreach}
                                   </select>
                              </td>
                         </tr>
                         <tr>
                              <td align="center" colspan="6">
                                   <input type="hidden" name="accion" value="">
                                   <input type="button" value="Aceptar" onclick="validar();">
                              </td>
                         </tr>
                    </table>
               </form>
          </center>
     </body>
</html>
