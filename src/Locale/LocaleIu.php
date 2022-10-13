<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageIu;

/**
 * Class LocaleIu - Inuktitut
 */
class LocaleIu extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'ᐃᓄᒃᑎᑐᑦ';
    }

    public function endonymSortable()
    {
        return 'ᐃᓄᒃᑎᑐᑦ';
    }

    public function language()
    {
        return new LanguageIu();
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
