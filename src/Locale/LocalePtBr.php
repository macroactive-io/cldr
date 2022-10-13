<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Territory\TerritoryBr;

/**
 * Class LocalePtBr - Brazilian Portuguese
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
