<?php

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryIn;

/**
 * Class LocaleSdDevaIn - Sindhi
 *
* @psalm-immutable
 */
class LocaleSdDevaIn extends LocaleSdDeva
{
    public function territory(): TerritoryIn 
    {
        return new TerritoryIn();
    }
}