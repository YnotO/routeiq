<?php
// mpesa_callback.php
// This receives Safaricom’s callback and updates invoice/payment in DB

require '../init.php'; // bootstrap PHPNuxBill

// Get JSON input from Safaricom
$data = file_get_contents('php://input');
$log = json_decode($data, true);

// Save raw log for debugging
file_put_contents('mpesa_log.json', $data, FILE_APPEND);

if (isset($log['Body']['stkCallback'])) {
    $stk = $log['Body']['stkCallback'];
    $resultCode = $stk['ResultCode'];
    $checkoutRequestID = $stk['CheckoutRequestID'];

    if ($resultCode == 0) {
        // Payment successful
        $amount = $stk['CallbackMetadata']['Item'][0]['Value'];
        $mpesaCode = $stk['CallbackMetadata']['Item'][1]['Value'];
        $phone = $stk['CallbackMetadata']['Item'][4]['Value'];

        // Match invoice by CheckoutRequestID (save it when initiating STK)
        $invoice = ORM::for_table('tbl_invoices')
            ->where('checkout_id', $checkoutRequestID)
            ->find_one();

        if ($invoice) {
            $invoice->status = 'Paid';
            $invoice->payment_method = 'Mpesa';
            $invoice->transaction_id = $mpesaCode;
            $invoice->save();
        }
    }
}
