<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritorySi;

/**
 * @psalm-immutable
 */
class LocaleEnSi extends LocaleEn
{
    public function territory(): TerritorySi
    {
        return new TerritorySi();
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
