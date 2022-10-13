<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCa;

/**
 * Class LocaleFrCa - Canadian French
 * @psalm-immutable
 */
class LocaleFrCa extends LocaleFr
{
    public function endonym(): string
    {
        return 'français canadien';
    }

    public function endonymSortable(): string
    {
        return 'FRANCAIS CANADIEN';
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }

    public function territory(): TerritoryCa
    {
        return new TerritoryCa();
    }
}
