<?php
declare(strict_types=1);
namespace MMNewmedia\Test\Soap;

use MMNewmedia\IsbnWebserviceClient\Entity\IsValidISBN10;
use MMNewmedia\IsbnWebserviceClient\Entity\IsValidISBN10Response;
use MMNewmedia\IsbnWebserviceClient\Entity\IsValidISBN13;
use MMNewmedia\IsbnWebserviceClient\Entity\IsValidISBN13Response;
use MMNewmedia\IsbnWebserviceClient\Soap\IsbnSoapClient;
use PHPUnit\Framework\TestCase;
use SoapFault;

class IsbnSoapClientTest extends TestCase
{
    protected $client;
    
    public function setUp(): void
    {
        $wsdl = 'http://webservices.daehosting.com/services/isbnservice.wso?WSDL';
        $this->client = new IsbnSoapClient($wsdl);
    }
    
    public function testClientIsIdentical(): void
    {
        $this->assertSame(get_class($this->client), IsbnSoapClient::class);
    }
    
    public function testIsIsbn13Response(): void
    {
        $isValidIsbn13 = (new IsValidISBN13())
            ->setISBN('9783864906466');
        
        $response = $this->client->IsValidISBN13($isValidIsbn13);
        
        $this->assertInstanceOf(
            IsValidISBN13Response::class,
            $response
        );
    }
    
    public function testIsValidIsbn13(): void
    {
        $isValidIsbn13 = (new IsValidISBN13())
            ->setISBN('9783864906466');
        
        $response = $this->client->IsValidISBN13($isValidIsbn13);
        
        $this->assertTrue($response->getIsValidISBN13Result());
    }
    
    public function testIsInvalidIsbn13(): void
    {
        $isValidIsbn13 = (new IsValidISBN13())
            ->setISBN('1234');
        
        $response = $this->client->IsValidISBN13($isValidIsbn13);
        
        $this->assertFalse($response->getIsValidISBN13Result());
    }
    
    public function testIsIsbn13SoapFault(): void
    {
        $this->expectException(SoapFault::class);
        $response = $this->client->IsValidISBN13();
        
        $this->assertFalse($response->getIsValidISBN13Result());
    }
    
    public function testIsIsbn10Response(): void
    {
        $isValidIsbn10 = (new IsValidISBN10())
            ->setISBN('3864906466');
        
        $response = $this->client->IsValidISBN10($isValidIsbn10);
        
        $this->assertInstanceOf(
            IsValidISBN10Response::class,
            $response
        );
    }
    
    public function testIsValidIsbn10(): void
    {
        $isValidIsbn10 = (new IsValidISBN10())
            ->setISBN('3864906466');
        
        $response = $this->client->IsValidISBN10($isValidIsbn10);
        
        $this->assertTrue($response->getIsValidISBN10Result());
    }
    
    public function testIsInvalidIsbn10(): void
    {
        $isValidIsbn10 = (new IsValidISBN10())
            ->setISBN('1234');
        
        $response = $this->client->IsValidISBN10($isValidIsbn10);
        
        $this->assertFalse($response->getIsValidISBN10Result());
    }
    
    public function testIsIsbn10SoapFault(): void
    {
        $this->expectException(SoapFault::class);
        $response = $this->client->IsValidISBN10();
        
        $this->assertFalse($response->getIsValidISBN10Result());
    }
}