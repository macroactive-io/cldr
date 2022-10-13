<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryMa;

/**
 * Class LocaleArMa
 */
class LocaleArMa extends LocaleAr
{
    public function numberSymbols()
    {
        return [
            self::GROUP    => self::DOT,
            self::DECIMAL  => self::COMMA,
            self::NEGATIVE => self::LTR_MARK . '-',
        ];
    }

    public function territory()
    {
        return new TerritoryMa();
    }

    protected function numerals()
    {
        $latin = new ScriptLatn();

        return $latin->numerals();
    }

    protected function percentFormat()
    {
        return self::PLACEHOLDER . self::LTR_MARK . self::PERCENT . self::LTR_MARK;
    }
}
