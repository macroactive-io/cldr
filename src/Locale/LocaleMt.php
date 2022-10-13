<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageMt;

/**
 * Class LocaleMt - Maltese
 */
class LocaleMt extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Malti';
    }

    public function endonymSortable()
    {
        return 'MALTI';
    }

    public function language()
    {
        return new LanguageMt();
    }
}
