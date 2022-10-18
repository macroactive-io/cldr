<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryDk;

/**
 * Class LocaleEnDe - English
 * @psalm-immutable
 */
class LocaleEnDk extends LocaleEn
{
    public function territory(): TerritoryDk
    {
        return new TerritoryDk();
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
