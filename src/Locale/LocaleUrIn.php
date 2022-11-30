<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryIn;

/**
 * @psalm-immutable
 */
class LocaleUrIn extends LocaleUr
{
    public function territory(): TerritoryIn
    {
        return new TerritoryIn();
    }

    protected function numberSymbols(): array
    {
        return [
            self::DECIMAL  => self::ARAB_DECIMAL,
            self::GROUP    => self::ARAB_GROUP,
            self::NEGATIVE => self::LTR_MARK . self::HYPHEN . self::LTR_MARK,
        ];
    }
}
