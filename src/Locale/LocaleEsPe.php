<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryPe;

/**
 * Class LocaleEsPe
 * @psalm-immutable
 */
class LocaleEsPe extends LocaleEs
{
    public function territory(): TerritoryPe
    {
        return new TerritoryPe();
    }
}
