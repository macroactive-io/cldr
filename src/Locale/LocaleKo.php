<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKo;

/**
 * Class LocaleKo - Korean
 */
class LocaleKo extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return '한국어';
    }

    public function language()
    {
        return new LanguageKo();
    }
}
