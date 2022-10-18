<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageChr;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Cherokee
 *
 * @psalm-immutable
 */
class LocaleChr extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'ᏣᎳᎩ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageChr();
    }
}
