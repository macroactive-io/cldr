<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryBn;

/**
 * @psalm-immutable
 */
class LocaleMsBn extends LocaleMs
{
    protected function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }

    public function territory(): TerritoryBn
    {
        return new TerritoryBn();
    }
}
