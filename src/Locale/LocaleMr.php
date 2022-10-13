<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageMr;

/**
 * Class LocaleMr - Marathi
 * @psalm-immutable
 */
class LocaleMr extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'मराठी';
    }

    public function language(): LanguageInterface
    {
        return new LanguageMr();
    }

    protected function digitsGroup(): int
    {
        return 2;
    }
}
