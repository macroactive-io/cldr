<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryIt;

/**
 * Class LocaleDeCh - Swiss High German
 * @psalm-immutable
 */
class LocaleDeIt extends LocaleDe
{
    public function territory(): TerritoryIt
    {
        return new TerritoryIt();
    }
}
