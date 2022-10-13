<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBr;

/**
 * Class LocaleEsBr
 * @psalm-immutable
 */
class LocaleEsBr extends LocaleEs
{
    public function territory(): TerritoryBr
    {
        return new TerritoryBr();
    }
}
