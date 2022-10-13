<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAt;

/**
 * Class LocaleDeAt - Austrian German
 */
class LocaleDeAt extends LocaleDe
{
    public function endonym()
    {
        return 'Österreichisches Deutsch';
    }

    public function endonymSortable()
    {
        return 'OSTERREICHISCHES DEUTSCH';
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }

    public function territory()
    {
        return new TerritoryAt();
    }
}
