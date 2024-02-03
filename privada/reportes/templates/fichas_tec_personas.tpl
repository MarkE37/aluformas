<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
          <meta charset="utf-8">
          <link rel="stylesheet" href="../{$direc_css}" type="text/css">
          <script type="text/javascript" src="../../ajax.js"></script>
          <script type="text/javascript">
     		function buscar(){
     			var d1, contenedor, url;
     			contenedor = document.getElementById('personas1');
     			d1 = document.formu1.paterno.value;
     			d2 = document.formu1.materno.value;
     			d3 = document.formu1.nombres.value;
     			d4 = document.formu1.ci.value;
     			ajax = nuevoAjax();
     			url = "ajax_buscar_personas.php";
     			param = "paterno="+d1+"&materno="+d2+"&nombres="+d3+"&ci="+d4;
     			ajax.open("POST", url, true);
     			ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded')
     			ajax.onreadystatechange = function(){
     				if (ajax.readyState == 4) {
     					contenedor.innerHTML = ajax.responseText;
     				}
     			}
     			ajax.send(param);
     		}
               function mostrar(id_persona){
                    d1 = id_persona
                    ventanaCalendario = window.open("fichas_tec_personas1.php?id_personas1=" + d1 , "calendario", "width=600, height=550, left=100, top=100, scrollbars=yes, menubars=no, statusbar=no, status=no, resizable=yes, location=no")
               }
     	</script>
     </head>
     <body>
          <br><br><br>
          <center>
               <h2> FICHAS TECNICAS DE PERSONAS</h2>
               <form action="#" method="post" name="formu1">
                    <table width="50%">
                         <tr>
                              <th>
                                   <b>Paterno</b>
                                   <input type="text" name="paterno" value="" size="10" onkeyup="buscar()">
                              </th>
                              <th>
                                   <b>materno</b>
                                   <input type="text" name="materno" value="" size="10" onkeyup="buscar()">
                              </th>
                              <th>
                                   <b>nombres</b>
                                   <input type="text" name="nombres" value="" size="10" onkeyup="buscar()">
                              </th>
                              <th>
                                   <b>ci</b>
                                   <input type="text" name="ci" value="" size="10" onkeyup="buscar()">
                              </th>
                         </tr>
                    </table>
               </form>
               <div class="listado" id="personas1"></div>
          </center>
     </body>
</html>
