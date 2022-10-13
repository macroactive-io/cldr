<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMo;

/**
 * Class LocaleZhHansMo
 * @psalm-immutable
 */
class LocaleZhHansMo extends LocaleZh
{
    public function territory(): TerritoryMo
    {
        return new TerritoryMo();
    }
}
