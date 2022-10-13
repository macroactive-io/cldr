<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageOm;

/**
 * Class LocaleOm - Oromo
 */
class LocaleOm extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Oromoo';
    }

    public function endonymSortable()
    {
        return 'OROMOO';
    }

    public function language()
    {
        return new LanguageOm();
    }
}
