<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageMn;

/**
 * Class LocaleMn - Mongolian
 */
class LocaleMn extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'монгол';
    }

    public function endonymSortable()
    {
        return 'МОНГОЛ';
    }

    public function language()
    {
        return new LanguageMn();
    }
}
