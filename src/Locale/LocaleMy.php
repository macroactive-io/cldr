<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageMy;

/**
 * Class LocaleMy - Burmese
 */
class LocaleMy extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'မြန်မာ';
    }

    public function language()
    {
        return new LanguageMy();
    }

    protected function minimumGroupingDigits()
    {
        return 3;
    }
}
