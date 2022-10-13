<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKok;

/**
 * Class LocaleKok - Konkani
 */
class LocaleKok extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'कोंकणी';
    }

    public function language()
    {
        return new LanguageKok();
    }

    protected function digitsGroup()
    {
        return 2;
    }
}
