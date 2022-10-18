<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageMr;

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
