<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageOc;

/**
 * Class LocaleOc - Occitan
 */
class LocaleOc extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'lenga d’òc';
    }

    public function language()
    {
        return new LanguageOc();
    }
}
