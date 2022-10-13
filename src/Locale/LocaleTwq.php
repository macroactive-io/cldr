<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageTwq;

/**
 * Class LocaleTwq - Tasawaq
 */
class LocaleTwq extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Tasawaq senni';
    }

    public function endonymSortable()
    {
        return 'TASAWAQ SENNI';
    }

    public function language()
    {
        return new LanguageTwq();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP => self::NBSP,
        ];
    }
}
