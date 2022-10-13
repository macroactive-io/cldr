<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryDe;

/**
 * Class LocaleEnDe - English
 */
class LocaleEnDe extends LocaleEn
{
    public function territory()
    {
        return new TerritoryDe();
    }

    protected function percentFormat()
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
