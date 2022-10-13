<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryTk;

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
