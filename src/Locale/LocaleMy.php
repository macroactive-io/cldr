<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageMy;

/**
 * Burmese
 *
 * @psalm-immutable
 */
class LocaleMy extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'မြန်မာ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageMy();
    }

    protected function minimumGroupingDigits(): int
    {
        return 3;
    }
}
