<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAt;

/**
 * Class LocaleEnAt - English
 * @psalm-immutable
 */
class LocaleEnAt extends LocaleEn
{
    public function territory(): TerritoryAt
    {
        return new TerritoryAt();
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
