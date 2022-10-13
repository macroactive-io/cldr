<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageSi;

/**
 * Class LocaleSi - Sinhala
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
