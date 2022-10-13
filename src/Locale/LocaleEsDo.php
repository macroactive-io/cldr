<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryDo;

/**
 * Class LocaleEsDo
 * @psalm-immutable
 */
class LocaleEsDo extends LocaleEs
{
    public function territory(): TerritoryDo
    {
        return new TerritoryDo();
    }
}
