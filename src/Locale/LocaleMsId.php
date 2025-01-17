<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryId;

/**
 * Class LocaleMsId
 *
 * @psalm-immutable
 */
class LocaleMsId extends LocaleMs
{
    public function territory(): TerritoryId
    {
        return new TerritoryId();
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
