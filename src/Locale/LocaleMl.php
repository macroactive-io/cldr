<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageMl;

/**
 * Class LocaleMl - Malayalam
 */
class LocaleMl extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'മലയാളം';
    }

    public function language()
    {
        return new LanguageMl();
    }

    protected function digitsGroup()
    {
        return 2;
    }
}
