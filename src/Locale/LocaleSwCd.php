<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryCd;

/**
 * Class LocaleSwCd
 * @psalm-immutable
 */
class LocaleSwCd extends LocaleSw
{
    public function numberSymbols(): array
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
