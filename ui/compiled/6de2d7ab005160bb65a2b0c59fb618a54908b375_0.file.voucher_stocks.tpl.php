<?php
/* Smarty version 4.5.3, created on 2025-09-19 01:34:17
  from 'C:\laragon\www\phpnuxbill\ui\ui\widget\voucher_stocks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_68cc50a9c40311_92320853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6de2d7ab005160bb65a2b0c59fb618a54908b375' => 
    array (
      0 => 'C:\\laragon\\www\\phpnuxbill\\ui\\ui\\widget\\voucher_stocks.tpl',
      1 => 1758216806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68cc50a9c40311_92320853 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['_c']->value['disable_voucher'] != 'yes' && $_smarty_tpl->tpl_vars['stocks']->value['unused'] > 0 || $_smarty_tpl->tpl_vars['stocks']->value['used'] > 0) {?>
    <div class="panel panel-primary mb20 panel-hovered project-stats table-responsive">
        <div class="panel-heading">Vouchers Stock</div>
        <div class="table-responsive">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th><?php echo Lang::T('Package Name');?>
</th>
                        <th>unused</th>
                        <th>used</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plans']->value, 'stok');
$_smarty_tpl->tpl_vars['stok']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['stok']->value) {
$_smarty_tpl->tpl_vars['stok']->do_else = false;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['stok']->value['name_plan'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['stok']->value['unused'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['stok']->value['used'];?>
</td>
                        </tr>
                    </tbody>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <tr>
                    <td>Total</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['stocks']->value['unused'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['stocks']->value['used'];?>
</td>
                </tr>
            </table>
        </div>
    </div>
<?php }
}
}
