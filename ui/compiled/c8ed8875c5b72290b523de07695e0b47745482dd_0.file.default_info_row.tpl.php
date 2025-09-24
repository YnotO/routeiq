<?php
/* Smarty version 4.5.3, created on 2025-09-23 15:26:53
  from 'C:\laragon\www\RouteIQ\ui\ui\widget\default_info_row.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_68d2bc3da1c706_11599089',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8ed8875c5b72290b523de07695e0b47745482dd' => 
    array (
      0 => 'C:\\laragon\\www\\RouteIQ\\ui\\ui\\widget\\default_info_row.tpl',
      1 => 1758216806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68d2bc3da1c706_11599089 (Smarty_Internal_Template $_smarty_tpl) {
?><ol class="breadcrumb">
    <li><?php echo Lang::dateFormat($_smarty_tpl->tpl_vars['start_date']->value);?>
</li>
    <li><?php echo Lang::dateFormat($_smarty_tpl->tpl_vars['current_date']->value);?>
</li>
    <?php if ($_smarty_tpl->tpl_vars['_c']->value['enable_balance'] == 'yes' && in_array($_smarty_tpl->tpl_vars['_admin']->value['user_type'],array('SuperAdmin','Admin','Report'))) {?>
        <li onclick="window.location.href = '<?php echo Text::url('customers&search=&order=balance&filter=Active&orderby=desc');?>
'" style="cursor: pointer;">
            <?php echo Lang::T('Customer Balance');?>
 <sup><?php echo $_smarty_tpl->tpl_vars['_c']->value['currency_code'];?>
</sup>
            <b><?php echo number_format($_smarty_tpl->tpl_vars['cb']->value,0,$_smarty_tpl->tpl_vars['_c']->value['dec_point'],$_smarty_tpl->tpl_vars['_c']->value['thousands_sep']);?>
</b>
        </li>
    <?php }?>
</ol><?php }
}
