<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryFr;

/**
 * Class LocaleGswFr
 * @psalm-immutable
 */
class LocaleGswFr extends LocaleGsw
{
    public function territory(): TerritoryFr
    {
        return new TerritoryFr();
    }
}
