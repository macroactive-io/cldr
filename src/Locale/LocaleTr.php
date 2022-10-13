<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageTr;

/**
 * Class LocaleTr - Turkish
 */
class LocaleTr extends AbstractLocale implements LocaleInterface
{
    public function collation()
    {
        return 'turkish_ci';
    }

    public function endonym()
    {
        return 'Türkçe';
    }

    public function endonymSortable()
    {
        return 'TURKCE';
    }

    public function language()
    {
        return new LanguageTr();
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
        return self::PERCENT . '%s';
    }
}
