<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageGsw;

/**
 * Class LocaleGsw - Swiss German
 */
class LocaleGsw extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Schwiizertüütsch';
    }

    public function endonymSortable()
    {
        return 'SCHWIIZERTUUTSCH';
    }

    public function language()
    {
        return new LanguageGsw();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP    => self::APOSTROPHE,
            self::NEGATIVE => self::MINUS_SIGN,
        ];
    }

    protected function percentFormat()
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
