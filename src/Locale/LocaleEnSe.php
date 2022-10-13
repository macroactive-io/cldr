<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySe;

/**
 * Class LocaleEnDe - English
 * @psalm-immutable
 */
class LocaleEnSe extends LocaleEn
{
    public function numberSymbols(): array
    {
        return [
            self::GROUP => self::NBSP,
        ];
    }

    public function territory(): TerritorySe
    {
        return new TerritorySe();
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
