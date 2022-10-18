<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryTk;

/**
 * Class LocaleEnTk
 * @psalm-immutable
 */
class LocaleEnTk extends LocaleEn
{
    public function territory(): TerritoryTk
    {
        return new TerritoryTk();
    }
}
