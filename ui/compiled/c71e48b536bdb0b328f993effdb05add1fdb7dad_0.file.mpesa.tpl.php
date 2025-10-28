<?php
/* Smarty version 4.5.3, created on 2025-10-28 16:57:16
  from 'C:\xampp\htdocs\routeiq\ui\ui\admin\paymentgateway\mpesa.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_6900cbbc7ceed6_76814807',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c71e48b536bdb0b328f993effdb05add1fdb7dad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\routeiq\\ui\\ui\\admin\\paymentgateway\\mpesa.tpl',
      1 => 1761398595,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6900cbbc7ceed6_76814807 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">M-Pesa Gateway Settings</h4>
        </div>
        <div class="card-body">
            <form method="post">
                <input type="hidden" name="save" value="actives" />

                <div class="mb-3">
                    <label for="business_code" class="form-label">Business Shortcode</label>
                    <input type="text" class="form-control" id="business_code" name="business_code" required>
                </div>

                <div class="mb-3">
                    <label for="passkey" class="form-label">Passkey</label>
                    <input type="text" class="form-control" id="passkey" name="passkey" required>
                </div>

                <div class="mb-3">
                    <label for="callback_url" class="form-label">Callback URL</label>
                    <input type="text" class="form-control" id="callback_url" name="callback_url" 
                           value="http://yourdomain.com/mpesa_callback.php" required>
                </div>

                <button type="submit" class="btn btn-success">
                    <i class="bi bi-save"></i> Save Settings
                </button>
            </form>
        </div>
    </div>
</div>
<?php }
}
