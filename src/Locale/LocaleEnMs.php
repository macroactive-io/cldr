<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMs;

/**
 * Class LocaleEnMs
 * @psalm-immutable
 */
class LocaleEnMs extends LocaleEn
{
    public function territory(): TerritoryMs
    {
        return new TerritoryMs();
    }
}
