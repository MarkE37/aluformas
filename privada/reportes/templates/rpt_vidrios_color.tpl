<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
          <link rel="stylesheet" href="../{$direcc_css}" type="text/css">
          <meta charset="utf-8">
          <script type="text/javascript">
               function validar(){
                    color = document.formu.color.value;
                    if (document.formu.color.value == ""){
                         alert("por favor seleccione un color");
                         document.formu.color.focus();
                         return;
                    }
                    ventanaCalendario = window.open("rpt_vidrios_color1.php?color=" + color , "calendario", "width=600, height=550, left=100, top=100, scrollbars=yes, menubars=no, statusbar=no, status=no, resizable=yes, location=no")
               }
          </script>
     </head>
     <body>
          <br><br><br><br>
          <center>
               <h2> REPORTES DE VIDRIOS POR COLOR</h2>
               <form name="formu" method="post">
                    <table>
                         <tr>
                              <th>*Seleccione color</th><th>:</th>
                              <td>
                                   <select name="color">
                                        {foreach item=r from=$colores}
                                        <option value="{$r.id_color}">{$r.nombre}</option>
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
