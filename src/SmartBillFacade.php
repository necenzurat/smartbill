<?php

namespace Necenzurat\SmartBill;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Necenzurat\SmartBill\Skeleton\SkeletonClass
 */
class SmartBillFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'smartbill';
    }
}
