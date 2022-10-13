<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMx;

/**
 * Class LocaleEsMx - Mexican Spanish
 * @psalm-immutable
 */
class LocaleEsMx extends LocaleEs
{
    public function endonym(): string
    {
        return 'español de México';
    }

    public function endonymSortable(): string
    {
        return 'ESPANOL DE MEXICO';
    }

    public function territory(): TerritoryMx
    {
        return new TerritoryMx();
    }
}
