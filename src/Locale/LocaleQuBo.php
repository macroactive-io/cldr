<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryBo;

/**
 * @psalm-immutable
 */
class LocaleQuBo extends LocaleQu
{
    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }

    public function territory(): TerritoryBo
    {
        return new TerritoryBo();
    }
}
