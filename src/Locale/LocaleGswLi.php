<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryLi;

/**
 * Class LocaleGswLi
 * @psalm-immutable
 */
class LocaleGswLi extends LocaleGsw
{
    public function territory(): TerritoryLi
    {
        return new TerritoryLi();
    }
}
