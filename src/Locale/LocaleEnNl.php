<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryNl;

/**
 * @psalm-immutable
 */
class LocaleEnNl extends LocaleEn
{
    public function territory(): TerritoryNl
    {
        return new TerritoryNl();
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
