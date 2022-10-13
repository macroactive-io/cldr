<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryDe;

/**
 * Class LocaleEnDe - English
 * @psalm-immutable
 */
class LocaleEnDe extends LocaleEn
{
    public function territory(): TerritoryDe
    {
        return new TerritoryDe();
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
