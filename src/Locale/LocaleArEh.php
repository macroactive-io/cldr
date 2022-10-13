<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryEh;

/**
 * Class LocaleArEh
 */
class LocaleArEh extends LocaleAr
{
    public function numberSymbols()
    {
        return [
            self::NEGATIVE => self::LTR_MARK . '-',
        ];
    }

    public function territory()
    {
        return new TerritoryEh();
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
