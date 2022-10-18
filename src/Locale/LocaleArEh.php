<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryEh;

/**
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
