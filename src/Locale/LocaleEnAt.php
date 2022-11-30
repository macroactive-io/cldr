<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryAt;

/**
 * English
 *
 * @psalm-immutable
 */
class LocaleEnAt extends LocaleEn
{
    public function territory(): TerritoryAt
    {
        return new TerritoryAt();
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
