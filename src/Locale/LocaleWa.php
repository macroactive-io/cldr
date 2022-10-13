<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageWa;

/**
 * Class LocaleWa - Walloon
 */
class LocaleWa extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Walon';
    }

    public function endonymSortable()
    {
        return 'WALON';
    }

    public function language()
    {
        return new LanguageWa();
    }
}
