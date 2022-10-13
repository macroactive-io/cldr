<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKn;

/**
 * Class LocaleKn - Kannada
 */
class LocaleKn extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'ಕನ್ನಡ';
    }

    public function language()
    {
        return new LanguageKn();
    }
}
