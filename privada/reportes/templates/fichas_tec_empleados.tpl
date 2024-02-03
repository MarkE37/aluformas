<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
          <meta charset="utf-8">
          <link rel="stylesheet" href="../{$direc_css}" type="text/css">
          <script type="text/javascript" src="../../ajax.js"></script>
          <script type="text/javascript">
     		function buscar(){
     			var d1, contenedor, url;
     			contenedor = document.getElementById('empleados1');
     			d1 = document.formu1.nombre.value;
     			d2 = document.formu1.ci.value;
     			d3 = document.formu1.telefono.value;
     			ajax = nuevoAjax();
     			url = "ajax_buscar_empleados.php";
     			param = "nombre="+d1+"&ci="+d2+"&telefono="+d3;
     			ajax.open("POST", url, true);
     			ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded')
     			ajax.onreadystatechange = function(){
     				if (ajax.readyState == 4) {
     					contenedor.innerHTML = ajax.responseText;
     				}
     			}
     			ajax.send(param);
     		}
               function mostrar(id_empleado){
                    d1 = id_empleado
                    ventanaCalendario = window.open("fichas_tec_empleados1.php?id_empleados1=" + d1 , "calendario", "width=600, height=550, left=100, top=100, scrollbars=yes, menubars=no, statusbar=no, status=no, resizable=yes, location=no")
               }
     	</script>
     </head>
     <body>
          <br><br><br>
          <center>
               <h2> FICHAS TECNICAS DE EMPLEADOS</h2>
               <form action="#" method="post" name="formu1">
                    <table width="50%">
                         <tr>
                              <th>
                                   <b>nombre</b>
                                   <input type="text" name="nombre" value="" size="10" onkeyup="buscar()">
                              </th>
                              <th>
                                   <b>ci</b>
                                   <input type="text" name="ci" value="" size="10" onkeyup="buscar()">
                              </th>
                              <th>
                                   <b>telefono</b>
                                   <input type="text" name="telefono" value="" size="10" onkeyup="buscar()">
                              </th>
                         </tr>
                    </table>
               </form>
               <div class="listado" id="empleados1"></div>
          </center>
     </body>
</html>
