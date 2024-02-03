<?php
/* Smarty version 3.1.29, created on 2021-07-01 21:51:28
  from "D:\disenoWeb\www\sis_aluformas\privada\reportes\templates\RPT_perfiles.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_60de71208fd412_91262564',
  'file_dependency' => 
  array (
    'fce800bbd47336c475e70391ba8f945958c270cf' => 
    array (
      0 => 'D:\\disenoWeb\\www\\sis_aluformas\\privada\\reportes\\templates\\RPT_perfiles.tpl',
      1 => 1625190671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60de71208fd412_91262564 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
     <head>
          <link rel="stylesheet" href="../<?php echo $_smarty_tpl->tpl_vars['direc_css']->value;?>
" type="text/css">
          <?php echo '<script'; ?>
 type="text/javascript">
               var ventanaCalendario = false;
               function imprimir(){
                    ventanaCalendario = window.open("RPT_perfiles1.php", "calendario", "width=600, height=550, left=100, top=100, scrollbars=YES, menubars=NO, statusbar=NO, status=NO resizable=YES, location=NO");
               }
               function pdf(){
                    ventanaCalendario = window.open("pdf_perfiles.php", "calendario", "width=600, height=550, left=100, top=100, scrollbars=YES, menubars=NO, statusbar=NO, status=NO resizable=YES, location=NO");
               }
          <?php echo '</script'; ?>
>
     </head>
     <body>
          <div class="normal">
               <table width=100% border="0">
                    <tr>
                         <td width="33%">
                              <table>
                                   <tr>
                                   </tr>
                              </table>
                         </td>
                         <td align="center" width="33%">
                              <h2>Perfiles</h2>
                         </td>
                         <td align="center" width="33%"></td>
                    </tr>
               </table>
          </div>
          <br>
          <center>
               <div class="listado">
                    <table>
                         <thead>
                              <tr>
                                   <th>NRO</th>
                                   <th>Perfiles</th>
                                   <th>Color</th>
                                   <th>Linea</th>
                                   <th>medida(cm)</th>
                              </tr>
                         </thead>
                         <?php $_smarty_tpl->tpl_vars["b"] = new Smarty_Variable("1", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "b", 0);?>
                         <?php
$_from = $_smarty_tpl->tpl_vars['RTP_perfiles']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_r_0_saved_item = isset($_smarty_tpl->tpl_vars['r']) ? $_smarty_tpl->tpl_vars['r'] : false;
$_smarty_tpl->tpl_vars['r'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['r']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->_loop = true;
$__foreach_r_0_saved_local_item = $_smarty_tpl->tpl_vars['r'];
?>
                              <tr>
                                   <td align="center"><?php echo $_smarty_tpl->tpl_vars['b']->value;?>
</td>
                                   <td><?php echo $_smarty_tpl->tpl_vars['r']->value['nombre'];?>
</td>
                                   <td><?php echo $_smarty_tpl->tpl_vars['r']->value['color'];?>
</td>
                                   <td><?php echo $_smarty_tpl->tpl_vars['r']->value['linea'];?>
</td>
                                   <td><?php echo $_smarty_tpl->tpl_vars['r']->value['largo'];?>
</td>
                              </tr>
                         <?php $_smarty_tpl->tpl_vars["b"] = new Smarty_Variable(((string)$_smarty_tpl->tpl_vars['b']->value+1), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "b", 0);?>
                         <?php
$_smarty_tpl->tpl_vars['r'] = $__foreach_r_0_saved_local_item;
}
if ($__foreach_r_0_saved_item) {
$_smarty_tpl->tpl_vars['r'] = $__foreach_r_0_saved_item;
}
?>
                    </table>
                    <br><br>
                    <table align="center" border="1">
                         <tr>
                              <th> <input type="radio" name="seleccionar" onclick="javascript:imprimir()"> Imprimir </td>
                         </tr>
                    </table>
               </div>
          </center>
     </body>
</html>
<?php }
}
