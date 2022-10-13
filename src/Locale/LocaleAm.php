<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageAm;

/**
 * Class LocaleAm - Amharic
 */
class LocaleAm extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'አማርኛ';
    }

    public function language()
    {
        return new LanguageAm();
    }
}
