<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

/**
 * Class LocalePtPt - European Portuguese
 */
class LocalePtPt extends LocalePt
{
    public function numberSymbols()
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
