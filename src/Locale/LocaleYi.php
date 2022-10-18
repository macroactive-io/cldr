<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageYi;

/**
 * Yiddish
 *
 * @psalm-immutable
 */
class LocaleYi extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'ייִדיש';
    }

    public function language(): LanguageInterface
    {
        return new LanguageYi();
    }
}
