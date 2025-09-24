<?php
/* Smarty version 4.5.3, created on 2025-09-23 15:26:55
  from 'C:\laragon\www\RouteIQ\ui\ui\admin\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_68d2bc3f8b2d94_37198290',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7936295d4e19bacf32f14ef9531fbaf75fa0e637' => 
    array (
      0 => 'C:\\laragon\\www\\RouteIQ\\ui\\ui\\admin\\dashboard.tpl',
      1 => 1758216805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_68d2bc3f8b2d94_37198290 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'showWidget' => 
  array (
    'compiled_filepath' => 'C:\\laragon\\www\\RouteIQ\\ui\\compiled\\7936295d4e19bacf32f14ef9531fbaf75fa0e637_0.file.dashboard.tpl.php',
    'uid' => '7936295d4e19bacf32f14ef9531fbaf75fa0e637',
    'call_name' => 'smarty_template_function_showWidget_145219409268d2bc3f668923_72948669',
  ),
));
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php $_smarty_tpl->_assignInScope('dtipe', "dashboard_".((string)$_smarty_tpl->tpl_vars['tipeUser']->value));?>

<?php $_smarty_tpl->_assignInScope('rows', explode(".",$_smarty_tpl->tpl_vars['_c']->value[$_smarty_tpl->tpl_vars['dtipe']->value]));
$_smarty_tpl->_assignInScope('pos', 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'cols');
$_smarty_tpl->tpl_vars['cols']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cols']->value) {
$_smarty_tpl->tpl_vars['cols']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['cols']->value == 12) {?>
        <div class="row">
            <div class="col-md-12">
                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'showWidget', array('widgets'=>$_smarty_tpl->tpl_vars['widgets']->value,'pos'=>$_smarty_tpl->tpl_vars['pos']->value), true);?>

            </div>
        </div>
        <?php $_smarty_tpl->_assignInScope('pos', $_smarty_tpl->tpl_vars['pos']->value+1);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('colss', explode(",",$_smarty_tpl->tpl_vars['cols']->value));?>
        <div class="row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['colss']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
                <div class="col-md-<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
">
                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'showWidget', array('widgets'=>$_smarty_tpl->tpl_vars['widgets']->value,'pos'=>$_smarty_tpl->tpl_vars['pos']->value), true);?>

                </div>
                <?php $_smarty_tpl->_assignInScope('pos', $_smarty_tpl->tpl_vars['pos']->value+1);?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php if ($_smarty_tpl->tpl_vars['_c']->value['new_version_notify'] != 'disable') {?>
    <?php echo '<script'; ?>
>
        window.addEventListener('DOMContentLoaded', function() {
            $.getJSON("./version.json?" + Math.random(), function(data) {
                var localVersion = data.version;
                $('#version').html('Version: ' + localVersion);
                $.getJSON(
                    "https://raw.githubusercontent.com/hotspotbilling/phpnuxbill/master/version.json?" +
                    Math
                    .random(),
                    function(data) {
                        var latestVersion = data.version;
                        if (localVersion !== latestVersion) {
                            $('#version').html('Latest Version: ' + latestVersion);
                            if (getCookie(latestVersion) != 'done') {
                                Swal.fire({
                                    icon: 'info',
                                    title: "New Version Available\nVersion: " + latestVersion,
                                    toast: true,
                                    position: 'bottom-right',
                                    showConfirmButton: true,
                                    showCloseButton: true,
                                    timer: 30000,
                                    confirmButtonText: '<a href="<?php echo Text::url('community');?>
#latestVersion" style="color: white;">Update Now</a>',
                                    timerProgressBar: true,
                                    didOpen: (toast) => {
                                        toast.addEventListener('mouseenter', Swal.stopTimer)
                                        toast.addEventListener('mouseleave', Swal
                                            .resumeTimer)
                                    }
                                });
                                setCookie(latestVersion, 'done', 7);
                            }
                        }
                    });
            });

        });
    <?php echo '</script'; ?>
>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* smarty_template_function_showWidget_145219409268d2bc3f668923_72948669 */
if (!function_exists('smarty_template_function_showWidget_145219409268d2bc3f668923_72948669')) {
function smarty_template_function_showWidget_145219409268d2bc3f668923_72948669(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('pos'=>0), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['widgets']->value, 'w');
$_smarty_tpl->tpl_vars['w']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['w']->value) {
$_smarty_tpl->tpl_vars['w']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['w']->value['position'] == $_smarty_tpl->tpl_vars['pos']->value) {?>
            <?php echo $_smarty_tpl->tpl_vars['w']->value['content'];?>

        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}}
/*/ smarty_template_function_showWidget_145219409268d2bc3f668923_72948669 */
}
