<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageFr;

/**
 * Class LocaleFr - French
 */
class LocaleFr extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'français';
    }

    public function endonymSortable()
    {
        return 'FRANCAIS';
    }

    public function language()
    {
        return new LanguageFr();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::NARROW_NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }

    protected function percentFormat()
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
