<?php
/* Smarty version 4.5.3, created on 2025-10-28 16:48:37
  from 'C:\xampp\htdocs\routeiq\ui\ui\widget\voucher_stocks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_6900c9b56217e1_99636751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e70cf512c0d42251d1beb9693ab5b0d05e127ffd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\routeiq\\ui\\ui\\widget\\voucher_stocks.tpl',
      1 => 1761398595,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6900c9b56217e1_99636751 (Smarty_Internal_Template $_smarty_tpl) {
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
