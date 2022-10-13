<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageDv;

/**
 * Class LocaleDv - Divehi
 */
class LocaleDv extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'ތާނަ';
    }

    public function language()
    {
        return new LanguageDv();
    }
}
