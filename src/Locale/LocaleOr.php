<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageOr;

/**
 * Class LocaleOr - Oriya
 */
class LocaleOr extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'ଓଡ଼ିଆ';
    }

    public function language()
    {
        return new LanguageOr();
    }

    protected function digitsGroup()
    {
        return 2;
    }
}
