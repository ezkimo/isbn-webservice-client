# isbn-webservice-client
An object orientated example implementation of the PHP SoapClient class

## Installation

Run the following to install this library:

```bash
$ composer require ezkimo/isbn-webservice-client
```

## Example

This example assumes a PSR-4 autoloader and shows how to use the SoapClient implementation for a free to use ISBN webservice.

```php
<?php
declare(strict_types=1);
namespace MMNewmedia\Example;

use MMNewmedia\IsbnWebserviceClient\Entity\IsValidISBN13;
use MMNewmedia\IsbnWebserviceClient\Soap\IsbnSoapClient;
use DOMDocument;
use SoapFault;

// require PSR-4 autoloading (assumes, that composer dump-autoload was executed before)
require '../vendor/autoload.php';

try {
    $wsdl = 'http://webservices.daehosting.com/services/isbnservice.wso?WSDL';
    $client = new IsbnSoapClient($wsdl);
    
    $isValidIsbn13 = (new IsValidISBN13())
        ->setIsbn('9783864906466');
    
    $response = $client->IsValidISBN13($isValidIsbn13);
    
    $dom = new DOMDocument();
    $dom->formatOutput = true;
    
    echo "<h2>Request</h2>";
    $dom->loadXML($client->__getLastRequest());
    echo "<pre>" . htmlentities($dom->saveXML()) . "</pre>";
    
    echo "<h2>Response</h2>";
    $dom->loadXML($client->__getLastResponse());
    echo "<pre>" . htmlentities($dom->saveXML()) . "</pre>";
    
    echo "<h2>PHP Response</h2>";
    echo "<pre>";
    var_dump($response);
    echo "</pre>";
} catch (SoapFault $fault) {
    var_dump($fault);
}
```
