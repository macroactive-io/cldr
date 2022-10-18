<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageVai;

/**
 * Class LocaleVai - Vai
 * @psalm-immutable
 */
class LocaleVai extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'ꕙꔤ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageVai();
    }
}
