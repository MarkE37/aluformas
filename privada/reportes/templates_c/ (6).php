<?php
/* Smarty version 3.1.29, created on 2021-07-01 21:25:35
  from "D:\disenoWeb\www\sis_aluformas\privada\reportes\templates\rpt_perfiles_linea.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_60de6b0f9c4060_05796342',
  'file_dependency' => 
  array (
    '0c83d0942af429cbf8dbff118d2d3c335baf7b75' => 
    array (
      0 => 'D:\\disenoWeb\\www\\sis_aluformas\\privada\\reportes\\templates\\rpt_perfiles_linea.tpl',
      1 => 1603924104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60de6b0f9c4060_05796342 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
          <link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direcc_css']->value;?>
" type="text/css">
          <meta charset="utf-8">
          <?php echo '<script'; ?>
 type="text/javascript">
               function validar(){
                    linea = document.formu.linea.value;
                    if (document.formu.linea.value == ""){
                         alert("por favor seleccione la linea de perfil");
                         document.formu.linea.focus();
                         return;
                    }
                    ventanaCalendario = window.open("rpt_perfiles_linea1.php?linea=" + linea , "calendario", "width=600, height=550, left=100, top=100, scrollbars=yes, menubars=no, statusbar=no, status=no, resizable=yes, location=no")
               }
          <?php echo '</script'; ?>
>
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
<?php }
}
