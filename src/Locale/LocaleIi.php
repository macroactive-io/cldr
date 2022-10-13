<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageIi;

/**
 * Class LocaleIi - Sichuan Yi
 */
class LocaleIi extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'ꆈꌠꉙ';
    }

    public function language()
    {
        return new LanguageIi();
    }
}
