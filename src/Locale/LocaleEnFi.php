<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryFi;

/**
 * Class LocaleEnDe - English
 * @psalm-immutable
 */
class LocaleEnFi extends LocaleEn
{
    public function numberSymbols(): array
    {
        return [
            self::GROUP => self::NBSP,
        ];
    }

    public function territory(): TerritoryFi
    {
        return new TerritoryFi();
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
