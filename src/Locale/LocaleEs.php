<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageEs;
use Fisharebest\Localization\Territory\TerritoryEs;

/**
 * Class LocaleEs - Spanish
 */
class LocaleEs extends AbstractLocale implements LocaleInterface
{
    public function collation()
    {
        return 'spanish_ci';
    }

    public function endonym()
    {
        return 'español';
    }

    public function endonymSortable()
    {
        return 'ESPANOL';
    }

    public function language()
    {
        return new LanguageEs();
    }

    public function territory()
    {
        return new TerritoryEs();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }

    protected function percentFormat()
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
