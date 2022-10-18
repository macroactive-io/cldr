<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Territory\TerritoryBr;

/**
 * Brazilian Portuguese
 *
 * @psalm-immutable
 */
class LocalePtBr extends LocalePt
{
    public function endonym(): string
    {
        return 'português do Brasil';
    }

    public function endonymSortable(): string
    {
        return 'PORTUGUES DO BRASIL';
    }

    public function pluralRule(): PluralRule2
    {
        return new PluralRule2();
    }

    public function territory(): TerritoryBr
    {
        return new TerritoryBr();
    }
}
