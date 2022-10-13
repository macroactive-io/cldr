<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageVai;

/**
 * Class LocaleVai - Vai
 */
class LocaleVai extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'ꕙꔤ';
    }

    public function language()
    {
        return new LanguageVai();
    }
}
