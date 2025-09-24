<?php
/* Smarty version 4.5.3, created on 2025-09-23 15:26:54
  from 'C:\laragon\www\RouteIQ\ui\ui\widget\info_payment_gateway.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_68d2bc3e419cb5_30357939',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2410d5c72a3b9cb3ecdad9f73b2ceb9036e494c0' => 
    array (
      0 => 'C:\\laragon\\www\\RouteIQ\\ui\\ui\\widget\\info_payment_gateway.tpl',
      1 => 1758216806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68d2bc3e419cb5_30357939 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel panel-success panel-hovered mb20 activities">
    <div class="panel-heading"><?php echo Lang::T('Payment Gateway');?>
: <?php echo str_replace(',',', ',$_smarty_tpl->tpl_vars['_c']->value['payment_gateway']);?>

    </div>
</div><?php }
}
