<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryIo;

/**
 * Class LocaleEnIo
 */
class LocaleEnIo extends LocaleEn
{
    public function territory()
    {
        return new TerritoryIo();
    }
}
