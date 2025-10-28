<?php
/* Smarty version 4.5.3, created on 2025-10-28 16:56:42
  from 'C:\xampp\htdocs\routeiq\pages\vouchers\Logo Header Center.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_6900cb9ad20f77_82861628',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a55094483f4278cd68f799e110e02c00679d847' => 
    array (
      0 => 'C:\\xampp\\htdocs\\routeiq\\pages\\vouchers\\Logo Header Center.html',
      1 => 1761398593,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6900cb9ad20f77_82861628 (Smarty_Internal_Template $_smarty_tpl) {
?><table border="0" cellspacing="0" cellpadding="2">
    <tbody><tr>
        <td valign="middle">
            <center><img src="system/uploads/logo.png"></center>
            <table width="100%" border="1" cellspacing="0" cellpadding="1" bordercolor="#757575">
                <tbody>
                    <tr>
                        <td valign="middle" align="center" style="font-size:25px">
                            [[qrcode]]</td>
                    </tr>
                    <tr>
                        <td valign="middle" align="center" style="font-size:20px">
                            [[voucher_code]]</td>
                    </tr>
                    <tr>
                        <td valign="middle" align="center" style="font-size:15px">
                            [[plan]] [[price]]<br></td>
                    </tr>
                </tbody>
            </table>
            <center>[[company_name]]</center>
        </td>
    </tr>
</tbody></table><?php }
}
