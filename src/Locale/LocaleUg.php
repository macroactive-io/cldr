<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageUg;

/**
 * Class LocaleUg - Uyghur
 */
class LocaleUg extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'ئۇيغۇرچە';
    }

    public function language()
    {
        return new LanguageUg();
    }
}
