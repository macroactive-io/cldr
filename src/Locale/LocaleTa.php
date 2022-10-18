<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageTa;

/**
 * Tamil
 *
 * @psalm-immutable
 */
class LocaleTa extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'தமிழ்';
    }

    public function language(): LanguageInterface
    {
        return new LanguageTa();
    }

    protected function digitsGroup(): int
    {
        return 2;
    }
}
