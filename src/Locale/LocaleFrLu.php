<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryLu;

/**
 * Class LocaleFrLu
 */
class LocaleFrLu extends LocaleFr
{
    public function territory()
    {
        return new TerritoryLu();
    }

    public function numberSymbols()
    {
        return [
            self::DECIMAL => self::COMMA,
            self::GROUP   => self::DOT,
        ];
    }
}
