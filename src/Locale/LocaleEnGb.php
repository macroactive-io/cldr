<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryGb;

/**
 * British English
 *
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
