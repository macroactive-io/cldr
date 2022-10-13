<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Script\ScriptLatn;
use Fisharebest\Localization\Territory\TerritoryEh;

/**
 * Class LocaleArEh
 * @psalm-immutable
 */
class LocaleArEh extends LocaleAr
{
    public function numberSymbols(): array
    {
        return [
            self::NEGATIVE => self::LTR_MARK . '-',
        ];
    }

    public function territory(): TerritoryEh
    {
        return new TerritoryEh();
    }

    protected function numerals(): array
    {
        $latin = new ScriptLatn();

        return $latin->numerals();
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::LTR_MARK . self::PERCENT . self::LTR_MARK;
    }
}
