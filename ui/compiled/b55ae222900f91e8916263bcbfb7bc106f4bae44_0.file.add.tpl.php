<?php
/* Smarty version 4.5.3, created on 2025-09-21 23:30:31
  from 'C:\laragon\www\phpnuxbill\ui\ui\admin\admin\add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_68d02827018fb3_73990720',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b55ae222900f91e8916263bcbfb7bc106f4bae44' => 
    array (
      0 => 'C:\\laragon\\www\\phpnuxbill\\ui\\ui\\admin\\admin\\add.tpl',
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
function content_68d02827018fb3_73990720 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!-- user-edit -->

<form class="form-horizontal" method="post" role="form" action="<?php echo Text::url('settings/users-post');?>
">
    <input type="hidden" name="csrf_token" value="<?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>
">
    <div class="row">
        <div class="col-sm-6 col-md-6">
            <div class="panel panel-primary panel-hovered panel-stacked mb30">
                <div class="panel-heading"><?php echo Lang::T('Profile');?>
</div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-md-3 control-label"><?php echo Lang::T('Full Name');?>
</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="fullname" name="fullname">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"><?php echo Lang::T('Phone');?>
</label>
                        <div class="col-md-9">
                            <input type="number" class="form-control" id="phone" name="phone">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"><?php echo Lang::T('Email');?>
</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="email" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="city" name="city" placeholder="<?php echo Lang::T('City');?>
">
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="subdistrict" name="subdistrict" placeholder="<?php echo Lang::T('Sub District');?>
">
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="ward" name="ward" placeholder="<?php echo Lang::T('Ward');?>
">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6">
            <div class="panel panel-primary panel-hovered panel-stacked mb30">
                <div class="panel-heading"><?php echo Lang::T('Credentials');?>
</div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-md-3 control-label"><?php echo Lang::T('User Type');?>
</label>
                        <div class="col-md-9">
                            <select name="user_type" id="user_type" class="form-control" onchange="checkUserType(this)">
                                <?php if ($_smarty_tpl->tpl_vars['_admin']->value['user_type'] == 'Agent') {?>
                                    <option value="Sales"><?php echo Lang::T('Sales');?>
</option>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['_admin']->value['user_type'] == 'Admin' || $_smarty_tpl->tpl_vars['_admin']->value['user_type'] == 'SuperAdmin') {?>
                                    <option value="Report"><?php echo Lang::T('Report Viewer');?>
</option>
                                    <option value="Agent"><?php echo Lang::T('Agent');?>
</option>
                                    <option value="Sales"><?php echo Lang::T('Sales');?>
</option>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['_admin']->value['user_type'] == 'SuperAdmin') {?>
                                    <option value="Admin"><?php echo Lang::T('Administrator');?>
</option>
                                    <option value="SuperAdmin"><?php echo Lang::T('Super Administrator');?>
</option>
                                <?php }?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group hidden" id="agentChooser">
                        <label class="col-md-3 control-label"><?php echo Lang::T('Agent');?>
</label>
                        <div class="col-md-9">
                            <select name="root" id="root" class="form-control">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['agents']->value, 'agent');
$_smarty_tpl->tpl_vars['agent']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['agent']->value) {
$_smarty_tpl->tpl_vars['agent']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['agent']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['agent']->value['username'];?>
 | <?php echo $_smarty_tpl->tpl_vars['agent']->value['fullname'];?>
 | <?php echo $_smarty_tpl->tpl_vars['agent']->value['phone'];?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"><?php echo Lang::T('Username');?>
</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="username" name="username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"><?php echo Lang::T('Password');?>
</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" id="password" value="<?php echo rand(000000,999999);?>
" name="password"
                            onmouseleave="this.type = 'password'" onmouseenter="this.type = 'text'">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-5 control-label"><?php echo Lang::T('Send Notification');?>
</label>
                        <div class="col-md-7">
                            <select name="send_notif" id="send_notif" class="form-control">
                                <option value="-"><?php echo Lang::T("Don't Send");?>
</option>
                                <option value="sms"><?php echo Lang::T('By SMS');?>
</option>
                                <option value="wa"><?php echo Lang::T('By WhatsApp');?>
</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group text-center">
        <button class="btn btn-primary" onclick="return ask(this, 'Continue the process of adding Admin?')" type="submit"><?php echo Lang::T('Save Changes');?>
</button>
        Or <a href="<?php echo Text::url('settings/users');?>
"><?php echo Lang::T('Cancel');?>
</a>
    </div>
</form>

    <?php echo '<script'; ?>
>
        function checkUserType($field){
            if($field.value=='Sales'){
                $('#agentChooser').removeClass('hidden');
            }else{
                $('#agentChooser').addClass('hidden');
            }
        }
<?php echo '</script'; ?>
>


<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
