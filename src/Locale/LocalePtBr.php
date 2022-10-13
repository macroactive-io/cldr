<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Territory\TerritoryBr;

/**
 * Class LocalePtBr - Brazilian Portuguese
 */
class LocalePtBr extends LocalePt
{
    public function endonym()
    {
        return 'português do Brasil';
    }

    public function endonymSortable()
    {
        return 'PORTUGUES DO BRASIL';
    }

    public function pluralRule()
    {
        return new PluralRule2();
    }

    public function territory()
    {
        return new TerritoryBr();
    }
}
