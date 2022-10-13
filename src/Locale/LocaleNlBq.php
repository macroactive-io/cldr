<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBq;

/**
 * Class LocaleNlBq
 * @psalm-immutable
 */
class LocaleNlBq extends LocaleNl
{
    public function territory(): TerritoryBq
    {
        return new TerritoryBq();
    }
}
