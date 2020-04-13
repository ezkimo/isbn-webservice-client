<?php
declare(strict_types=1);
namespace MMNewmedia\IsbnWebserviceClient\Entity;

use MMNewmedia\IsbnWebserviceClient\Json\JsonSerializableTrait;
use JsonSerializable;

class IsValidISBN10Response implements JsonSerializable
{
    use JsonSerializableTrait;
    
    protected ?bool $IsValidISBN10Result;
    
    public function getIsValidISBN10Result(): ?bool
    {
        return $this->IsValidISBN10Result;
    }
    
    public function setIsValidISBNResult(bool $isValidISBNResult): self
    {
        $this->IsValidISBN10Result = $isValidISBNResult;
        return $this;
    }
}