<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageNe;

/**
 * Nepali
 *
 * @psalm-immutable
 */
class LocaleNe extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'नेपाली';
    }

    public function language(): LanguageInterface
    {
        return new LanguageNe();
    }

    protected function digitsGroup(): int
    {
        return 2;
    }
}
