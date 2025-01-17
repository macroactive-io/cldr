<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Script\ScriptLatn;
use Macroactive\Cldr\Territory\TerritoryDz;

/**
 * @psalm-immutable
 */
class LocaleArDz extends LocaleAr
{
    public function territory(): TerritoryDz
    {
        return new TerritoryDz();
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP    => self::DOT,
            self::DECIMAL  => self::COMMA,
            self::NEGATIVE => self::LTR_MARK . self::HYPHEN,
        ];
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
