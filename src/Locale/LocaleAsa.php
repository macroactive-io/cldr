<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageAsa;

/**
 * Class LocaleAsa - Asu
 */
class LocaleAsa extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Kipare';
    }

    public function endonymSortable()
    {
        return 'KIPARE';
    }

    public function language()
    {
        return new LanguageAsa();
    }
}
