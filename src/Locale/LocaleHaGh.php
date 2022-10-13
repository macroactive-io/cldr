<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGh;

/**
 * Class LocaleHaGh
 * @psalm-immutable
 */
class LocaleHaGh extends LocaleHa
{
    public function territory(): TerritoryGh
    {
        return new TerritoryGh();
    }
}
