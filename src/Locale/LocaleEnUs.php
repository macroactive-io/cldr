<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryUs;

/**
 * American English
 *
 * @psalm-immutable
 */
class LocaleEnUs extends LocaleEn
{
    public function endonym(): string
    {
        return 'American English';
    }

    public function endonymSortable(): string
    {
        return 'ENGLISH, AMERICAN';
    }

    public function territory(): TerritoryUs
    {
        return new TerritoryUs();
    }
}
