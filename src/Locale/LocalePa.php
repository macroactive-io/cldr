<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguagePa;

/**
 * Class LocalePa - Punjabi
 */
class LocalePa extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'ਪੰਜਾਬੀ';
    }

    public function language()
    {
        return new LanguagePa();
    }

    protected function digitsGroup()
    {
        return 2;
    }
}
