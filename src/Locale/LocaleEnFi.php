<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryFi;

/**
 * Class LocaleEnDe - English
 */
class LocaleEnFi extends LocaleEn
{
    public function numberSymbols()
    {
        return [
            self::GROUP => self::NBSP,
        ];
    }

    public function territory()
    {
        return new TerritoryFi();
    }

    protected function percentFormat()
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
