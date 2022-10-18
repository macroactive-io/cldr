<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryLu;

/**
 * Class LocaleFrLu
 * @psalm-immutable
 */
class LocaleFrLu extends LocaleFr
{
    public function territory(): TerritoryLu
    {
        return new TerritoryLu();
    }

    public function numberSymbols(): array
    {
        return [
            self::DECIMAL => self::COMMA,
            self::GROUP   => self::DOT,
        ];
    }
}
