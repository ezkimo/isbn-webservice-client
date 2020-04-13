<?php
declare(strict_types=1);
namespace MMNewmedia\IsbnWebserviceClient\Entity;

use MMNewmedia\IsbnWebserviceClient\Json\JsonSerializableTrait;
use JsonSerializable;

class IsValidISBN10 implements JsonSerializable
{
    use JsonSerializableTrait;
    
    protected ?string $sISBN;
    
    public function getIsbn(): ?string
    {
        return $this->sISBN;
    }
    
    public function setIsbn(string $sIsbn): self
    {
        $this->sISBN = $sIsbn;
        return $this;
    }
}