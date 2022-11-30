<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryAe;

/**
 * @psalm-immutable
 */
class LocaleArAe extends LocaleAr
{
    public function territory(): TerritoryAe
    {
        return new TerritoryAe();
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP    => self::COMMA,
            self::DECIMAL  => self::DOT,
            self::NEGATIVE => self::LTR_MARK . self::HYPHEN,
        ];
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::LTR_MARK . self::PERCENT . self::LTR_MARK;
    }
}
