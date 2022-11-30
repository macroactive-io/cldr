<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryZa;

/**
 * @psalm-immutable
 */
class LocaleEnZa extends LocaleEn
{
    protected function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }

    public function territory(): TerritoryZa
    {
        return new TerritoryZa();
    }
}
