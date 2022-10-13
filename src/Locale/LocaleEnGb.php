<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGb;

/**
 * Class LocaleEnGb - British English
 * @psalm-immutable
 */
class LocaleEnGb extends LocaleEn
{
    public function endonym(): string
    {
        return 'British English';
    }

    public function endonymSortable(): string
    {
        return 'ENGLISH, BRITISH';
    }

    public function territory(): TerritoryGb
    {
        return new TerritoryGb();
    }
}
