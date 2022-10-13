<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\Territory150;

/**
 * Class LocaleEn150
 * @psalm-immutable
 */
class LocaleEn150 extends LocaleEn
{
    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }

    public function territory(): Territory150
    {
        return new Territory150();
    }
}
