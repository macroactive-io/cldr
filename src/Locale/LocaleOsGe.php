<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryGe;
use Macroactive\Cldr\Territory\TerritoryInterface;

/**
 * Class LocaleOsGe
 * @psalm-immutable
 */
class LocaleOsGe extends LocaleOs
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryGe();
    }
}
