<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageAf;

/**
 * Class LocaleAf - Afrikaans
 */
class LocaleAf extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Afrikaans';
    }

    public function endonymSortable()
    {
        return 'AFRIKAANS';
    }

    public function language()
    {
        return new LanguageAf();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
