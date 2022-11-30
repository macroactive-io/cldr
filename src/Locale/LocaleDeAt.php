<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryAt;

/**
 * Austrian German
 *
 * @psalm-immutable
 */
class LocaleDeAt extends LocaleDe
{
    public function endonym(): string
    {
        return 'Österreichisches Deutsch';
    }

    public function endonymSortable(): string
    {
        return 'OSTERREICHISCHES DEUTSCH';
    }

    public function territory(): TerritoryAt
    {
        return new TerritoryAt();
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
