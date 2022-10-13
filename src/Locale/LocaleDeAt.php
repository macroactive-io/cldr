<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAt;

/**
 * Class LocaleDeAt - Austrian German
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

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }

    public function territory(): TerritoryAt
    {
        return new TerritoryAt();
    }
}
