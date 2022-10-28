<?php

return [

    /*
    |--------------------------------------------------------------------------
    | SmartBill credentials
    |--------------------------------------------------------------------------
    |
    | Here you need to supply the credentials for the SmartBill platform
    | and the token you can be found at the following link:
    | https://cloud.smartbill.ro/core/integrari/
    | and the username is your login email.
    |
    */

    'username' => '',

    'token' => '',

    /*
    |--------------------------------------------------------------------------
    | Company VAT code
    |--------------------------------------------------------------------------
    |
    | The VAT code for the SmartBill account, you can have multiple
    | companies in SmartBill, but at the moment currently
    | one account is supported in this package
    |
    */
    
    'vatCode' => '',

    /*
    |--------------------------------------------------------------------------
    | Invoice Series
    |--------------------------------------------------------------------------
    |
    | Here you may define your invoice, proforma and receipt starting series
    | But first you need to define them in SmartBill at the following link
    | https://cloud.smartbill.ro/core/configurare/serii/
    |
    */

    'invoiceSeries' => 'TEST-INV',
    'proformaSeries' => 'TEST-PRO',
    'receiptSeries' => 'TEST-REC',

];
