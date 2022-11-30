<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryCd;

/**
 * @psalm-immutable
 */
class LocaleSwCd extends LocaleSw
{
    protected function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }

    public function territory(): TerritoryCd
    {
        return new TerritoryCd();
    }
}
