<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSsy;

/**
 * Class LocaleSsy - Saho
 */
class LocaleSsy extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Saho';
    }

    public function endonymSortable()
    {
        return 'SAHO';
    }

    public function language()
    {
        return new LanguageSsy();
    }
}
