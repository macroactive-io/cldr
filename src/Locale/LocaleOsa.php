<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageOsa;

/**
 * @psalm-immutable
 */
class LocaleOsa extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return '𐓏𐓘𐓻𐓘𐓻𐓟';
    }

    public function language(): LanguageInterface
    {
        return new LanguageOsa();
    }
}
