<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKhq;

/**
 * Class LocaleKhq - Koyra Chiini
 */
class LocaleKhq extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Koyra ciini';
    }

    public function endonymSortable()
    {
        return 'KOYRA CIINI';
    }

    public function language()
    {
        return new LanguageKhq();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP => self::NBSP,
        ];
    }
}
