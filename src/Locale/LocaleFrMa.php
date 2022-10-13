<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMa;

/**
 * Class LocaleFrMa
 * @psalm-immutable
 */
class LocaleFrMa extends LocaleFr
{
    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }

    public function territory(): TerritoryMa
    {
        return new TerritoryMa();
    }
}
