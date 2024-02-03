<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
          <link rel="stylesheet" href="../{$direc_css}" type="text/css">
          <script type="text/javascript" src="js/expresiones_regulares.js"></script>
          <script type="text/javascript" src="js/validar_vidrieria.js"></script>
     </head>
     <body>
          <br><br><br><br>
          <center>
               <h2>MODIFICAR VIDRIERIA</h2>
               <form action="vidrieria_modificar1.php" method="post" name="formu" enctype="multipart/form-data">
                    <table>
                         {foreach item=r from=$vidrieria}
                         <tr>
                              <th align="left">Nombre</th><th>:</th>
                              <td> <input type="text" name="nombre" onkeyup="this.value=this.value.toUpperCase()" value="{$r.nombre}"> </td>
                         </tr>
                         <tr>
                              <th align="left">Telefono</th><th>:</th>
                              <td> <input type="text" name="telefono" value="{$r.telefono}"> </td>
                         </tr>
                         <tr>
                              <th align="left">Direccion</th><th>:</th>
                              <td> <input type="text" name="direccion" onkeyup="this.value=this.value.toUpperCase()" value="{$r.direccion}"> </td>
                         </tr>
                         <tr>
                              <th align="left">Logo</th><th>:</th>
                              <td>
                                   <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
                                   <input type="file" name="logo_agencia">
                                   <input type="hidden" name="logo_agencia1" value="{$r.logo_agencia}">
                                   <br><b>{$r.logo_agencia}</b>
                              </td>
                         </tr>
                         <tr>
                              <td align="center" colspan="3">
                                   <input type="hidden" name="accion" value="">
                                   <input type="hidden" name="id_vidrieria" value="{$r.id_vidrieria}">
                                   <input type="button" name="Aceptar" value="Aceptar" onclick="validar();">
                                   <input type="button" name="Cancelar" value="Cancelar" onclick="javascript:location.href='vidrieria.php';">
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
