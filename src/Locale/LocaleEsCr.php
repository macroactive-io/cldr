<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryCr;

/**
 * Class LocaleEsCr
 * @psalm-immutable
 */
class LocaleEsCr extends LocaleEs
{
    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }

    public function territory(): TerritoryCr
    {
        return new TerritoryCr();
    }
}
