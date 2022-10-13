<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBh;

/**
 * Class LocaleArBh
 * @psalm-immutable
 */
class LocaleArBh extends LocaleAr
{
    public function territory(): TerritoryBh
    {
        return new TerritoryBh();
    }
}
