<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
          <link rel="stylesheet" href="../{$direcc_css}" type="text/css">
          <meta charset="utf-8">
          <script type="text/javascript">
               function validar(){
                    linea = document.formu.linea.value;
                    if (document.formu.linea.value == ""){
                         alert("por favor seleccione la linea de perfil");
                         document.formu.linea.focus();
                         return;
                    }
                    ventanaCalendario = window.open("rpt_perfiles_linea1.php?linea=" + linea , "calendario", "width=600, height=550, left=100, top=100, scrollbars=yes, menubars=no, statusbar=no, status=no, resizable=yes, location=no")
               }
          </script>
     </head>
     <body>
          <br><br>
          <center>
               <h2> REPORTES DE PERFILES POR LINEAS</h2>
               <form name="formu" method="post">
                    <table>
                         <tr>
                              <th>*Seleccione LINEA</th><th>:</th>
                              <td>
                                   <select name="linea">
                                        <option value="">--Seleccione--</option>
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                        <option value="15">15</option>
                                        <option value="20">20</option>
                                        <option value="25">25</option>
                                        <option value="35">35</option>
                                        <option value="40">40</option>
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
