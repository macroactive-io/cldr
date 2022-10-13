<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageTa;

/**
 * Class LocaleTa - Tamil
 */
class LocaleTa extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'தமிழ்';
    }

    public function language()
    {
        return new LanguageTa();
    }

    protected function digitsGroup()
    {
        return 2;
    }
}
