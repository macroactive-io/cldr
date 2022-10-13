<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageMr;

/**
 * Class LocaleMr - Marathi
 */
class LocaleMr extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'मराठी';
    }

    public function language()
    {
        return new LanguageMr();
    }

    protected function digitsGroup()
    {
        return 2;
    }
}
