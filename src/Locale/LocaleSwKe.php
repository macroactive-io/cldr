<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryKe;

/**
 * Class LocaleSwKe
 * @psalm-immutable
 */
class LocaleSwKe extends LocaleSw
{
    public function territory(): TerritoryKe
    {
        return new TerritoryKe();
    }
}
