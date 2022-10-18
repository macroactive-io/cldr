<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryIn;

/**
 * Class LocaleBoIn
 * @psalm-immutable
 */
class LocaleBoIn extends LocaleBo
{
    public function territory(): TerritoryIn
    {
        return new TerritoryIn();
    }
}
