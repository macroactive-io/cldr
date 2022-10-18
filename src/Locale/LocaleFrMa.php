<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryMa;

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
