<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageGu;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Gujarati
 *
 * @psalm-immutable
 */
class LocaleGu extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'ગુજરાતી';
    }

    public function language(): LanguageInterface
    {
        return new LanguageGu();
    }

    protected function digitsGroup(): int
    {
        return 2;
    }
}
