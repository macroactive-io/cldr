<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSes;

/**
 * Class LocaleSes - Koyraboro Senni
 */
class LocaleSes extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Koyraboro senni';
    }

    public function endonymSortable()
    {
        return 'KOYRABORO SENNI';
    }

    public function language()
    {
        return new LanguageSes();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP => self::NBSP,
        ];
    }
}
