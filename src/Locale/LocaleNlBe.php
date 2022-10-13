<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBe;

/**
 * Class LocaleNlBe - Flemish
 * @psalm-immutable
 */
class LocaleNlBe extends LocaleNl
{
    public function endonym(): string
    {
        return 'Vlaams';
    }

    public function endonymSortable(): string
    {
        return 'VLAAMS';
    }

    public function territory(): TerritoryBe
    {
        return new TerritoryBe();
    }
}
