<?php
/* Smarty version 4.5.3, created on 2025-09-23 15:26:53
  from 'C:\laragon\www\RouteIQ\ui\ui\widget\cron_monitor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_68d2bc3d80ab00_17663941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f4603600f2e280d29a44d45cbf3f05739f92d7d' => 
    array (
      0 => 'C:\\laragon\\www\\RouteIQ\\ui\\ui\\widget\\cron_monitor.tpl',
      1 => 1758216806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68d2bc3d80ab00_17663941 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['run_date']->value) {?>
    <?php $_smarty_tpl->_assignInScope('current_time', time());?>
    <?php $_smarty_tpl->_assignInScope('run_time', strtotime($_smarty_tpl->tpl_vars['run_date']->value));?>
    <?php if ($_smarty_tpl->tpl_vars['current_time']->value-$_smarty_tpl->tpl_vars['run_time']->value > 3600) {?>
        <div class="panel panel-cron-warning panel-hovered mb20 activities">
            <div class="panel-heading"><i class="fa fa-clock-o"></i> &nbsp; <?php echo Lang::T('Cron has not run for over 1 hour. Please
                check your setup.');?>
</div>
        </div>
    <?php } else { ?>
        <div class="panel panel-cron-success panel-hovered mb20 activities">
            <div class="panel-heading"><?php echo Lang::T('Cron Job last ran on');?>
: <?php echo $_smarty_tpl->tpl_vars['run_date']->value;?>
</div>
        </div>
    <?php }
} else { ?>
    <div class="panel panel-cron-danger panel-hovered mb20 activities">
        <div class="panel-heading"><i class="fa fa-warning"></i> &nbsp; <?php echo Lang::T('Cron appear not been setup, please check
                your cron setup.');?>
</div>
    </div>
<?php }
}
}
