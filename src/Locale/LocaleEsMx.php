<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMx;

/**
 * Class LocaleEsMx - Mexican Spanish
 */
class LocaleEsMx extends LocaleEs
{
    public function endonym()
    {
        return 'español de México';
    }

    public function endonymSortable()
    {
        return 'ESPANOL DE MEXICO';
    }

    public function territory()
    {
        return new TerritoryMx();
    }
}
