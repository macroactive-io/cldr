<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBe;

/**
 * Class LocaleNlBe - Flemish
 */
class LocaleNlBe extends LocaleNl
{
    public function endonym()
    {
        return 'Vlaams';
    }

    public function endonymSortable()
    {
        return 'VLAAMS';
    }

    public function territory()
    {
        return new TerritoryBe();
    }
}
