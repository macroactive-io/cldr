<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryLi;

/**
 * @psalm-immutable
 */
class LocaleDeLi extends LocaleDe
{
    public function territory(): TerritoryLi
    {
        return new TerritoryLi();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::APOSTROPHE,
            self::DECIMAL => self::DOT,
        ];
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::PERCENT;
    }
}
