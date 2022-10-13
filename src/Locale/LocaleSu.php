<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageSu;

/**
 * Class LocaleSu
 * @psalm-immutable
 */
class LocaleSu extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'ᮘᮞ ᮞᮥᮔ᮪ᮓ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSu();
    }
}
