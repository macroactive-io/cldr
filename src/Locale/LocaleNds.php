<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageNds;

/**
 * Class LocaleNds - Low German
 */
class LocaleNds extends LocaleDe
{
    public function endonym()
    {
        return 'Neddersass’sch';
    }

    public function endonymSortable()
    {
        return 'NEDDERSASS’SCH';
    }

    public function language()
    {
        return new LanguageNds();
    }
}
