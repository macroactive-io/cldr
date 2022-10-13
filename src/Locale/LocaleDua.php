<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageDua;

/**
 * Class LocaleDua - Duala
 */
class LocaleDua extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'duálá';
    }

    public function endonymSortable()
    {
        return 'DUALA';
    }

    public function language()
    {
        return new LanguageDua();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }

    protected function percentFormat()
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
