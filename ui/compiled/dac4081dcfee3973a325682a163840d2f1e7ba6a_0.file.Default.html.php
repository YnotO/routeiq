<?php
/* Smarty version 4.5.3, created on 2025-10-28 16:56:42
  from 'C:\xampp\htdocs\routeiq\pages\vouchers\Default.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_6900cb9abd2345_63957560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dac4081dcfee3973a325682a163840d2f1e7ba6a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\routeiq\\pages\\vouchers\\Default.html',
      1 => 1761398593,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6900cb9abd2345_63957560 (Smarty_Internal_Template $_smarty_tpl) {
?><table border="0" cellspacing="0" cellpadding="2">
    <tbody><tr>
        <td valign="middle">
            <center><strong style="font-size:38px">[[company_name]]</strong></center>
            <table width="100%" border="1" cellspacing="0" cellpadding="1" bordercolor="#757575">
                <tbody>
                    <tr>
                        <td rowspan="4" width="1">[[qrcode]]
                        </td>
                    </tr>
                    <tr>
                        <td valign="middle" align="center" style="font-size:25px">
                            [[price]]</td>
                    </tr>
                    <tr>
                        <td valign="middle" align="center" style="font-size:20px">
                            [[voucher_code]]</td>
                    </tr>
                    <tr>
                        <td valign="middle" align="center" style="font-size:15px">
                            [[plan]] - [[counter]]<br></td>
                    </tr>
                </tbody>
            </table>
        </td>
    </tr>
</tbody></table><?php }
}
