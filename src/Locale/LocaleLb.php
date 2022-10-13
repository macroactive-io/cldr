<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageLb;

/**
 * Class LocaleLb - Luxembourgish
 */
class LocaleLb extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Lëtzebuergesch';
    }

    public function endonymSortable()
    {
        return 'LETZEBUERGESCH';
    }

    public function language()
    {
        return new LanguageLb();
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
