<?php
/* Smarty version 3.1.29, created on 2021-07-01 22:08:13
  from "D:\disenoWeb\www\sis_aluformas\privada\reportes\templates\rpt_perfiles_fechas1.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_60de750d369299_93395170',
  'file_dependency' => 
  array (
    'b8d795d1037c8d5a9738366618344b7d43dd3c95' => 
    array (
      0 => 'D:\\disenoWeb\\www\\sis_aluformas\\privada\\reportes\\templates\\rpt_perfiles_fechas1.tpl',
      1 => 1625191520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60de750d369299_93395170 ($_smarty_tpl) {
?>
<html>
     <head>
          <?php echo '<script'; ?>
 type="text/javascript">
               var ventanaCalendario = false;
               function imprimir(){
                    if (confirm(' Desea Imprimir ?')) {
                         window.print();
                    }
               }
          <?php echo '</script'; ?>
>
     </head>
     <body onclick="javascript:imprimir()">
          <div>
               <table width=100% border="0">
                    <tr>
                         <td width="33%">
                              <table align="right">
                                   <tr>
                                        <td>
                                             <img src="../../img/<?php echo $_smarty_tpl->tpl_vars['logo_agencia']->value;?>
" width="200">
                                        </td>
                                   </tr>
                              </table>
                         </td>
                         <td align="center" width="33%">
                              <h2>PERFILES CON FECHAS</h2>
                         </td>
                         <td align="center" width="33%"></td>
                    </tr>
               </table>
          </div>
          <br>
          <center>
               <div>
                    <table border="1px">
                         <thead>
                              <tr>
                                   <th>NRO</th>
                                   <th>Perfil</th>
                                   <th>Color</th>
                                   <th>Linea</th>
                                   <th>Medida(cm)</th>
                                   <th>FECHAS INSERCCION</th>
                              </tr>
                         </thead>
                         <?php $_smarty_tpl->tpl_vars["b"] = new Smarty_Variable("1", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "b", 0);?>
                         <?php
$_from = $_smarty_tpl->tpl_vars['rpt_perfiles_fechas']->value;
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
                                   <td><?php echo $_smarty_tpl->tpl_vars['r']->value['fec_insercion'];?>
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
                    <b>DEL : <?php echo $_smarty_tpl->tpl_vars['fecha1']->value;?>
 A <?php echo $_smarty_tpl->tpl_vars['fecha2']->value;?>
</b>
               </div>
          </center>
     </body>
</html>
<?php }
}
