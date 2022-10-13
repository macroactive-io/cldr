<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageTi;

/**
 * Class LocaleTi - Tigrinya
 */
class LocaleTi extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'ትግርኛ';
    }

    public function language()
    {
        return new LanguageTi();
    }
}
