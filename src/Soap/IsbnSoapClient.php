<?php
declare(strict_types=1);
namespace MMNewmedia\IsbnWebserviceClient\Soap;

use MMNewmedia\IsbnWebserviceClient\Entity\IsValidISBN10;
use MMNewmedia\IsbnWebserviceClient\Entity\IsValidISBN10Response;
use MMNewmedia\IsbnWebserviceClient\Entity\IsValidISBN13;
use MMNewmedia\IsbnWebserviceClient\Entity\IsValidISBN13Response;
use SoapClient;

class IsbnSoapClient extends SoapClient
{
    public function __construct(string $wsdl, array $options = [])
    {
        $options = array_merge([
            'cache_wsdl' => WSDL_CACHE_NONE,
            'classmap' => [
                'IsValidISBN13' => IsValidISBN13::class,
                'IsValidISBN13Response' => IsValidISBN13Response::class,
                'IsValidISBN10' => IsValidISBN10::class,
                'IsValidISBN10Response' => IsValidISBN10Response::class,
            ],
            'exceptions' => true,
            'typemap' => [
               
            ],
            'soap_version' => SOAP_1_1,
            'trace' => true,
        ], $options);
        
        parent::__construct($wsdl, $options);
    }
}