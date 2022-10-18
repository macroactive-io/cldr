<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageMi;

/**
 * Class LocaleDv - Divehi
 * @psalm-immutable
 */
class LocaleMi extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Māori';
    }

    public function language(): LanguageInterface
    {
        return new LanguageMi();
    }
}
