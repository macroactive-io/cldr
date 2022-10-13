<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageChr;

/**
 * Class LocaleChr - Cherokee
 */
class LocaleChr extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'ᏣᎳᎩ';
    }

    public function language()
    {
        return new LanguageChr();
    }
}
