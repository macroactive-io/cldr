<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySe;

/**
 * Class LocaleEnDe - English
 */
class LocaleEnSe extends LocaleEn
{
    public function numberSymbols()
    {
        return [
            self::GROUP => self::NBSP,
        ];
    }

    public function territory()
    {
        return new TerritorySe();
    }

    protected function percentFormat()
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
