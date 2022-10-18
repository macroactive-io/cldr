<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageJa;

/**
 * Japanese
 *
 * @psalm-immutable
 */
class LocaleJa extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return '日本語';
    }

    public function language(): LanguageInterface
    {
        return new LanguageJa();
    }
}
