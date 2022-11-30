<?php

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryEs;

/**
 * Class LocaleOcEs - Occitan
 *
* @psalm-immutable
 */
class LocaleOcEs extends LocaleOc
{
    public function territory(): TerritoryEs 
    {
        return new TerritoryEs();
    }
}