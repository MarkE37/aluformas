<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
          <link rel="stylesheet" href="../{$direcc_css}" type="text/css">
          <meta charset="utf-8">
          <script type="text/javascript">
               function validar(){
                    genero = document.formu.genero.value;
                    if (document.formu.genero.value == ""){
                         alert("por favor seleccione el genero");
                         document.formu.genero.focus();
                         return;
                    }
                    ventanaCalendario = window.open("rpt_personas_genero1.php?genero=" + genero , "calendario", "width=600, height=550, left=100, top=100, scrollbars=yes, menubars=no, statusbar=no, status=no, resizable=yes, location=no")
               }
          </script>
     </head>
     <body>
          <br><br><br><br>
          <center>
               <h2> REPORTES DE PERSONAS POR GENERO</h2>
               <form name="formu" method="post">
                    <table>
                         <tr>
                              <th>*Seleccione Genero</th><th>:</th>
                              <td>
                                   <select name="genero">
                                        <option value="">--Seleccione--</option>
                                        <option value="t">Todos</option>
                                        <option value="f">Femenino</option>
                                        <option value="m">Masculino</option>
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
