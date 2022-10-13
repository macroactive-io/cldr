<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCr;

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
