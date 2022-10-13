<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageBn;

/**
 * Class LocaleBn - Bengali
 */
class LocaleBn extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'বাংলা';
    }

    public function language()
    {
        return new LanguageBn();
    }

    protected function digitsGroup()
    {
        return 2;
    }
}
