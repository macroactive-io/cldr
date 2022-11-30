<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryLu;

/**
 * @psalm-immutable
 */
class LocaleFrLu extends LocaleFr
{
    public function territory(): TerritoryLu
    {
        return new TerritoryLu();
    }

    protected function numberSymbols(): array
    {
        return [
            self::DECIMAL => self::COMMA,
            self::GROUP   => self::DOT,
        ];
    }
}
