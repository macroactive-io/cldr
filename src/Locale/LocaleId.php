<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageId;

/**
 * Class LocaleId - Indonesian
 */
class LocaleId extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Indonesia';
    }

    public function endonymSortable()
    {
        return 'INDONESIA';
    }

    public function language()
    {
        return new LanguageId();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
