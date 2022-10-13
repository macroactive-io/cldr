<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageMo;

/**
 * Class LocaleIt - Italian
 */
class LocaleMo extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'limba moldovenească';
    }

    public function endonymSortable()
    {
        return 'LIMBA MOLDOVENEASCĂ';
    }

    public function language()
    {
        return new LanguageMo();
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
