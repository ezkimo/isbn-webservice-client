<?php
declare(strict_types=1);
namespace MMNewmedia\IsbnWebserviceClient\Json;

/**
 * Trait for implementing the JsonSerializable::jsonSerialize() method
 * 
 * @author Marcel Maaß <info@mm-newmedia.de>
 * @copyright 2020 MM Newmedia <https://www.mm-newmedia.de>
 * @package de.mmnewmedia.isbn-webservice-client
 * @subpackage json
 * @since 2020-04-12
 * @version
 */
trait JsonSerializableTrait
{
    /**
     * @see https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     * @return array
     */
    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }
}