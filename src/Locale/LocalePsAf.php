<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryAf;

/**
 * Class LocalePsAf
 * @psalm-immutable
 */
class LocalePsAf extends LocalePs
{
    public function territory(): TerritoryAf
    {
        return new TerritoryAf();
    }
}
