<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryIo;

/**
 * Class LocaleEnIo
 * @psalm-immutable
 */
class LocaleEnIo extends LocaleEn
{
    public function territory(): TerritoryIo
    {
        return new TerritoryIo();
    }
}
