<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSu;

/**
 * Class LocaleSu
 */
class LocaleSu extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'ᮘᮞ ᮞᮥᮔ᮪ᮓ';
    }

    public function language()
    {
        return new LanguageSu();
    }
}
