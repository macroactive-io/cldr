<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageOs;
use Fisharebest\Localization\Territory\TerritoryRu;

/**
 * Class LocaleOs - Ossetic
 */
class LocaleOs extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'ирон';
    }

    public function endonymSortable()
    {
        return 'ИРОН';
    }

    public function language()
    {
        return new LanguageOs();
    }

    public function territory()
    {
        return new TerritoryRu();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
