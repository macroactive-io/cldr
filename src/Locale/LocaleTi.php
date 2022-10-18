<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageTi;

/**
 * Class LocaleTi - Tigrinya
 * @psalm-immutable
 */
class LocaleTi extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'ትግርኛ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageTi();
    }
}
