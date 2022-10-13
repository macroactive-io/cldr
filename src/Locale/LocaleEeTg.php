<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryTg;

/**
 * Class LocaleEeTg
 * @psalm-immutable
 */
class LocaleEeTg extends LocaleEe
{
    public function territory(): TerritoryTg
    {
        return new TerritoryTg();
    }
}
