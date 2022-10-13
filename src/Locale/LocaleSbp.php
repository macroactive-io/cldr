<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSbp;

/**
 * Class LocaleSbp - Sangu
 */
class LocaleSbp extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Ishisangu';
    }

    public function endonymSortable()
    {
        return 'ISHISANGU';
    }

    public function language()
    {
        return new LanguageSbp();
    }
}
