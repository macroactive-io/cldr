<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAu;

/**
 * Class LocaleEnAu - Australian English
 * @psalm-immutable
 */
class LocaleEnAu extends LocaleEn
{
    public function endonym(): string
    {
        return 'Australian English';
    }

    public function endonymSortable(): string
    {
        return 'ENGLISH, AUSTRALIAN';
    }

    public function territory(): TerritoryAu
    {
        return new TerritoryAu();
    }
}
