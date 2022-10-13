<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCa;

/**
 * Class LocaleFrCa - Canadian French
 */
class LocaleFrCa extends LocaleFr
{
    public function endonym()
    {
        return 'français canadien';
    }

    public function endonymSortable()
    {
        return 'FRANCAIS CANADIEN';
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }

    public function territory()
    {
        return new TerritoryCa();
    }
}
