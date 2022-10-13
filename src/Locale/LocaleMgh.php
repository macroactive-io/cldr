<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageMgh;

/**
 * Class LocaleMgh - Makhuwa-Meetto
 */
class LocaleMgh extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Makua';
    }

    public function endonymSortable()
    {
        return 'MAKUA';
    }

    public function language()
    {
        return new LanguageMgh();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
