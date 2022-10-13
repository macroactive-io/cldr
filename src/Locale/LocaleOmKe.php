<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryKe;

/**
 * Class LocaleOmKe
 * @psalm-immutable
 */
class LocaleOmKe extends LocaleOm
{
    public function territory(): TerritoryKe
    {
        return new TerritoryKe();
    }
}
