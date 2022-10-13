<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSi;

/**
 * Class LocaleSi - Sinhala
 */
class LocaleSi extends AbstractLocale implements LocaleInterface
{
    public function collation()
    {
        return 'sinhala_ci';
    }

    public function endonym()
    {
        return 'සිංහල';
    }

    public function language()
    {
        return new LanguageSi();
    }
}
