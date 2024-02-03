<?php
/* Smarty version 3.1.29, created on 2021-07-01 21:48:50
  from "D:\disenoWeb\www\sis_aluformas\privada\reportes\templates\rpt_personas_fechas.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_60de7082e29dc0_79328282',
  'file_dependency' => 
  array (
    'f4eb2c8680af3dfb710a766b739b3f8260fb498d' => 
    array (
      0 => 'D:\\disenoWeb\\www\\sis_aluformas\\privada\\reportes\\templates\\rpt_personas_fechas.tpl',
      1 => 1621560992,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60de7082e29dc0_79328282 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
     <head>
          <link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
          <link rel="stylesheet" href="../../calendario/tcal.css" type="text/css">
          <?php echo '<script'; ?>
 type="text/javascript" src="../../calendario/tcal.js"><?php echo '</script'; ?>
>
          <?php echo '<script'; ?>
 type="text/javascript">
               function validar(){
                    fecha1 = document.formu.date1.value;
                    fecha2 = document.formu.date2.value;
                    if((fecha1 == "") || (fecha2 == "") || (fecha1 > fecha2)){
                         alert("Las fechas son incorrectas");
                         document.formu.date1.focus();
                         return;
                    }
                    ventanaCalendario = window.open("rpt_personas_fechas1.php?fecha1=" + fecha1 + "&fecha2=" + fecha2,"calendario","width=600, height=550, left=100, top=100, scrollbars=yes,menubars=no, statusbar=no, status=no, resizable=yes, location=no");
               }
          <?php echo '</script'; ?>
>
     </head>
     <body>
          <div class="normal">
               <table width=100% border="0">
                    <tr>
                         <td width="10%">
                              <table>
                                   <tr>
                                   </tr>
                              </table>
                         </td>
                         <td align="center" width="80%">
                              <h2>REPORTES DE PERSONAS CON FECHAS DE INSERCCION</h2>
                         </td>
                         <td align="center" width="10%"></td>
                    </tr>
               </table>
          </div>
          <br>
          <center>
               <div class="listado">
                    <form name="formu" method="post">
                         <table>
                              <tr>
                                   <th>(*)Fecha Inicio</th>
                                   <td> <input type="text" name="date1" class="tcal" value="" size="10"> </td>
                                   <th>(*)Fecha Fin</th>
                                   <td> <input type="text" name="date2" class="tcal" value="" size="10"> </td>
                              </tr>
                              <tr>
                                   <td align="center" colspan="4">
                                        <input type="hidden" name="accion" value="">
                                        <input type="button" value="Aceptar" onclick="validar();">
                                   </td>
                              </tr>
                         </table>
                    </form>
               </div>
          </center>
     </body>
</html>
<?php }
}
