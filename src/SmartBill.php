<?php

namespace Necenzurat\SmartBill;

class SmartBill extends SmartBillCloudRestClient
{
    public function __construct()
    {
        parent::__construct(config('smartbill.username'), config('smartbill.token'));
    }
}
