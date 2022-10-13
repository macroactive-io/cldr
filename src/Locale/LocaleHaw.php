<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageHaw;

/**
 * Class LocaleHaw - Hawaiian
 */
class LocaleHaw extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'ʻŌlelo Hawaiʻi';
    }

    public function endonymSortable()
    {
        return 'OLELO HAWAII';
    }

    public function language()
    {
        return new LanguageHaw();
    }
}
