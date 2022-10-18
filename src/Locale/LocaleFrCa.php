<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryCa;

/**
 * Canadian French
 *
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
