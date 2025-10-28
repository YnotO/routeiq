<?php
/* Smarty version 4.5.3, created on 2025-10-28 16:48:37
  from 'C:\xampp\htdocs\routeiq\ui\ui\widget\info_payment_gateway.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_6900c9b58373e4_19393609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28a6003fa155956529bee44db68cacd50e6e857b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\routeiq\\ui\\ui\\widget\\info_payment_gateway.tpl',
      1 => 1761398595,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6900c9b58373e4_19393609 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel panel-success panel-hovered mb20 activities">
    <div class="panel-heading"><?php echo Lang::T('Payment Gateway');?>
: <?php echo str_replace(',',', ',$_smarty_tpl->tpl_vars['_c']->value['payment_gateway']);?>

    </div>
</div><?php }
}
