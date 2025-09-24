<?php
/* Smarty version 4.5.3, created on 2025-09-19 01:34:17
  from 'C:\laragon\www\phpnuxbill\ui\ui\widget\info_payment_gateway.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_68cc50a9e20de4_63817063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '889124afc06f2a7863905dfec239f760e57896f9' => 
    array (
      0 => 'C:\\laragon\\www\\phpnuxbill\\ui\\ui\\widget\\info_payment_gateway.tpl',
      1 => 1758216806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68cc50a9e20de4_63817063 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel panel-success panel-hovered mb20 activities">
    <div class="panel-heading"><?php echo Lang::T('Payment Gateway');?>
: <?php echo str_replace(',',', ',$_smarty_tpl->tpl_vars['_c']->value['payment_gateway']);?>

    </div>
</div><?php }
}
