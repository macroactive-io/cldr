<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMh;

/**
 * Class LocaleEnMh
 * @psalm-immutable
 */
class LocaleEnMh extends LocaleEn
{
    public function territory(): TerritoryMh
    {
        return new TerritoryMh();
    }
}
