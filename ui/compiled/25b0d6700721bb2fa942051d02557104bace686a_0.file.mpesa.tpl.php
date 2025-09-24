<?php
/* Smarty version 4.5.3, created on 2025-09-23 15:21:29
  from 'C:\laragon\www\phpnuxbill\ui\ui\admin\paymentgateway\mpesa.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_68d2baf9a56dd2_92895370',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25b0d6700721bb2fa942051d02557104bace686a' => 
    array (
      0 => 'C:\\laragon\\www\\phpnuxbill\\ui\\ui\\admin\\paymentgateway\\mpesa.tpl',
      1 => 1758640868,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68d2baf9a56dd2_92895370 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>M-Pesa Settings</h2>
<form method="post">
    <input type="hidden" name="save" value="actives" />
    <label>Business Shortcode:</label>
    <input type="text" name="business_code" required><br>

    <label>Passkey:</label>
    <input type="text" name="passkey" required><br>

    <label>Callback URL:</label>
    <input type="text" name="callback_url" value="http://yourdomain.com/mpesa_callback.php" required><br>

    <button type="submit">Save</button>
</form>
<?php }
}
