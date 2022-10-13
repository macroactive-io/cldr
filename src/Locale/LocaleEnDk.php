<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryDk;

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
