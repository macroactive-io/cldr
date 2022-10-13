<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageNe;

/**
 * Class LocaleNe - Nepali
 */
class LocaleNe extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'नेपाली';
    }

    public function language()
    {
        return new LanguageNe();
    }
}
