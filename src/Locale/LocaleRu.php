<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageRu;

/**
 * Class LocaleRu - Russian
 */
class LocaleRu extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'русский';
    }

    public function endonymSortable()
    {
        return 'РУССКИЙ';
    }

    public function language()
    {
        return new LanguageRu();
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
