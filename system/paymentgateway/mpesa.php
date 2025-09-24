<?php
// Mpesa payment gateway integration

function mpesa_show_config()
{
    global $ui;

    $ui->assign('_title', 'M-Pesa Gateway Settings');
    $ui->display('admin/paymentgateway/mpesa.tpl');
}

function mpesa_save_config()
{
    $business_code = _post('business_code');
    $passkey = _post('passkey');
    $callback_url = _post('callback_url');

    // Save to tbl_appconfig or your gateway config table
    $d = ORM::for_table('tbl_appconfig')->where('setting', 'mpesa')->find_one();
    if (!$d) {
        $d = ORM::for_table('tbl_appconfig')->create();
        $d->setting = 'mpesa';
    }
    $d->value = json_encode([
        'business_code' => $business_code,
        'passkey' => $passkey,
        'callback_url' => $callback_url,
    ]);
    $d->save();

    r2(getUrl('paymentgateway/mpesa'), 's', 'M-Pesa settings saved.');
}
