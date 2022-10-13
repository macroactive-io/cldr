<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAs;

/**
 * Class LocaleEnAs
 * @psalm-immutable
 */
class LocaleEnAs extends LocaleEn
{
    public function territory(): TerritoryAs
    {
        return new TerritoryAs();
    }
}
