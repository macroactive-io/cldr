<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageHi;

/**
 * Class LocaleHi - Hindi
 */
class LocaleHi extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'हिन्दी';
    }

    public function language()
    {
        return new LanguageHi();
    }

    protected function digitsGroup()
    {
        return 2;
    }
}
