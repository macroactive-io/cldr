<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageMi;

/**
 * Class LocaleDv - Divehi
 */
class LocaleMi extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Māori';
    }

    public function language()
    {
        return new LanguageMi();
    }
}
