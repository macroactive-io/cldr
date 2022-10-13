<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryTo;

/**
 * Class LocaleEnTo
 * @psalm-immutable
 */
class LocaleEnTo extends LocaleEn
{
    public function territory(): TerritoryTo
    {
        return new TerritoryTo();
    }
}
