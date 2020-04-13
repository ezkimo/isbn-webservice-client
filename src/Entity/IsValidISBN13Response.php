<?php
declare(strict_types=1);
namespace MMNewmedia\IsbnWebserviceClient\Entity;

use MMNewmedia\IsbnWebserviceClient\Json\JsonSerializableTrait;
use JsonSerializable;

class IsValidISBN13Response implements JsonSerializable
{
    use JsonSerializableTrait;
    
    protected ?bool $IsValidISBN13Result;
    
    public function getIsValidISBN13Result(): ?bool
    {
        return $this->IsValidISBN13Result;
    }
    
    public function setIsValidISBN13Result(bool $isValidISBN13Result): self
    {
        $this->IsValidISBN13Result = $isValidISBN13Result;
        return $this;
    }
}