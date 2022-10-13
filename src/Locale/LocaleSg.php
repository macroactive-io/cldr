<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSg;

/**
 * Class LocaleSg - Sango
 */
class LocaleSg extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Sängö';
    }

    public function endonymSortable()
    {
        return 'SANGO';
    }

    public function language()
    {
        return new LanguageSg();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
