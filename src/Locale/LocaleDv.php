<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageDv;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Class LocaleDv - Divehi
 * @psalm-immutable
 */
class LocaleDv extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'ތާނަ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageDv();
    }
}
