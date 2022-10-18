<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguagePa;

/**
 * Class LocalePa - Punjabi
 * @psalm-immutable
 */
class LocalePa extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'ਪੰਜਾਬੀ';
    }

    public function language(): LanguageInterface
    {
        return new LanguagePa();
    }

    protected function digitsGroup(): int
    {
        return 2;
    }
}
