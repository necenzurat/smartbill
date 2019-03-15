# SmartBill.ro Service Provider

[![Latest Version on Packagist](https://img.shields.io/packagist/v/necenzurat/smartbill.svg?style=flat-square)](https://packagist.org/packages/necenzurat/smartbill)
[![Build Status](https://img.shields.io/travis/necenzurat/smartbill/master.svg?style=flat-square)](https://travis-ci.org/necenzurat/smartbill)
[![Quality Score](https://img.shields.io/scrutinizer/g/necenzurat/smartbill.svg?style=flat-square)](https://scrutinizer-ci.com/g/necenzurat/smartbill)
[![Total Downloads](https://img.shields.io/packagist/dt/necenzurat/smartbill.svg?style=flat-square)](https://packagist.org/packages/necenzurat/smartbill)

Simple SmartBill API integration for Laravel.

## Installation

You can install the package via composer:

```bash
composer require necenzurat/smartbill
```

## Usage

<details><summary>Click for usage</summary>
<p>

```php

$smartbill = new SmartBill;

$invoice = array(
    'companyVatCode'=> $companyVatCode,
    'client' 		=> array(
        'name' 			=> "Intelligent IT",
        'vatCode' 		=> "RO12345678",
        'regCom' 		=> "",
        'address' 		=> "str. Sperantei, nr. 5",
        'isTaxPayer' 	=> false,
        'city' 			=> "Sibiu",
        'country' 		=> "Romania",
        'email' 		=> "office@intelligent.ro",
    ),
    'issueDate' 	=> date('Y-m-d'),
    'seriesName' 	=> $companyInvoiceSeries,
    'isDraft' 		=> false,
    'dueDate' 		=> date('Y-m-d', time() + 14*3600),
    'mentions' 		=> "",
    'observations' 	=> "",
    'deliveryDate' 	=> date('Y-m-d', time() + 1*3600),
    'products' 		=> array(
        array(
            'name' 				=> "Produs 1",
            'code' 				=> "ccd1",
            'isDiscount' 		=> false,
            'measuringUnitName' => "buc",
            'currency' 			=> "RON",
            'quantity' 			=> 2,
            'price' 			=> 10,
            'isTaxIncluded' 	=> true,
            'taxName' 			=> "Redusa",
            'taxPercentage' 	=> 9,
            'isService' 		=> false,
        ),
    ),
);
echo 'Emitere factura simpla: ';
try {
   $output = $smarrtbill->createInvoice($invoice); //see docs for response
   $invoiceNumber = $output['number'];
   $invoiceSeries = $output['series'];
   echo $invoiceSeries . $invoiceNumber;
} catch (Exception $ex) {
   echo $ex->getMessage();
}
```

</p>
</details>
[see the SmartBill demo app examples](http://api.smartbill.ro/extension-files/aplicatie_demo_php.zip) 


### Testing

``` bash
hell no
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email necenzurat@gmail.com instead of using the issue tracker.

## Credits

- [All Contributors](../../contributors)

## License

The WTFPL. Please see [License File](LICENSE.md) for more information.
