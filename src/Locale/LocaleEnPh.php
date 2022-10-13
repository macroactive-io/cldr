<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryPh;

/**
 * Class LocaleEnPh
 * @psalm-immutable
 */
class LocaleEnPh extends LocaleEn
{
    public function territory(): TerritoryPh
    {
        return new TerritoryPh();
    }
}
