<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageNso;

/**
 * Class LocaleNso - Northern Sotho
 */
class LocaleNso extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Sesotho sa Leboa';
    }

    public function endonymSortable()
    {
        return 'SESOTHO SA LEBOA';
    }

    public function language()
    {
        return new LanguageNso();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP => self::NBSP,
        ];
    }
}
