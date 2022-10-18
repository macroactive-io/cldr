<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageSu;

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
