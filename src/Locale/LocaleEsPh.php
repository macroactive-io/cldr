<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryPh;

/**
 * Class LocaleEsPh
 * @psalm-immutable
 */
class LocaleEsPh extends LocaleEs
{
    public function territory(): TerritoryPh
    {
        return new TerritoryPh();
    }
}
