<?php
declare(strict_types=1);
namespace MMNewmedia\IsbnWebserviceClient\Entity;

use MMNewmedia\IsbnWebserviceClient\Json\JsonSerializableTrait;
use JsonSerializable;

/**
 * IsValidISBN13 request entity
 * 
 * @author Marcel Maaß <info@mm-newmedia.de>
 * @copyright 2020 MM Newmedia <https://www.mm-newmedia.de>
 * @package de.mmnewmedia.isbn-webserive-client
 * @subpackage entity
 * @since 2020-04-12
 * @version
 */
class IsValidISBN13 implements JsonSerializable
{
    use JsonSerializableTrait;
    
    protected string $sISBN;
    
    public function getIsbn(): string
    {
        return $this->sISBN;
    }
    
    public function setIsbn(string $sIsbn): self
    {
        $this->sISBN = $sIsbn;
        return $this;
    }
}