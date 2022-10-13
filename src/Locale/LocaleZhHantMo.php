<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMo;

/**
 * Class LocaleZhHantMo
 * @psalm-immutable
 */
class LocaleZhHantMo extends LocaleZhHant
{
    public function territory(): TerritoryMo
    {
        return new TerritoryMo();
    }
}
