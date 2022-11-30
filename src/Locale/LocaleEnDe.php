<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryDe;

/**
 * English
 *
 * @psalm-immutable
 */
class LocaleEnDe extends LocaleEn
{
    public function territory(): TerritoryDe
    {
        return new TerritoryDe();
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
