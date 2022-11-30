<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryMa;

/**
 * @psalm-immutable
 */
class LocaleFrMa extends LocaleFr
{
    public function territory(): TerritoryMa
    {
        return new TerritoryMa();
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
