<?php
/* Smarty version 3.1.29, created on 2021-07-01 21:51:32
  from "D:\disenoWeb\www\sis_aluformas\privada\reportes\templates\RTP_perfiles1.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_60de71241d0ef0_06707899',
  'file_dependency' => 
  array (
    '242cd7c9f58c81aa83a36cfe5ce068aa6a5930ab' => 
    array (
      0 => 'D:\\disenoWeb\\www\\sis_aluformas\\privada\\reportes\\templates\\RTP_perfiles1.tpl',
      1 => 1625190683,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60de71241d0ef0_06707899 ($_smarty_tpl) {
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
                              <h2>Perfiles</h2>
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
                    <b>FECHA : <?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>
</b>
               </div>
          </center>
     </body>
</html>
<?php }
}
