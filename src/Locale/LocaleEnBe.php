<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryBe;

/**
 * @psalm-immutable
 */
class LocaleEnBe extends LocaleEn
{
    public function territory(): TerritoryBe
    {
        return new TerritoryBe();
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
