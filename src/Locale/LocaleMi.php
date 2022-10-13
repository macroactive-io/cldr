<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageMi;

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
