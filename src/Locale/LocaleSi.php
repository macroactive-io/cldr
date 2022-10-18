<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageSi;

/**
 * Sinhala
 *
 * @psalm-immutable
 */
class LocaleSi extends AbstractLocale implements LocaleInterface
{
    public function collation(): string
    {
        return 'sinhala_ci';
    }

    public function endonym(): string
    {
        return 'සිංහල';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSi();
    }
}
