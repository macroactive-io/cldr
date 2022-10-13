<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageCcp;

/**
 * Class LocaleCcp - Chakma
 */
class LocaleCcp extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return '𑄌𑄋𑄴𑄟𑄳𑄦';
    }

    public function language()
    {
        return new LanguageCcp();
    }

    protected function digitsGroup()
    {
        return 2;
    }
}
