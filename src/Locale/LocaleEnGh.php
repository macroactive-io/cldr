<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGh;

/**
 * Class LocaleEnGh
 * @psalm-immutable
 */
class LocaleEnGh extends LocaleEn
{
    public function territory(): TerritoryGh
    {
        return new TerritoryGh();
    }
}
