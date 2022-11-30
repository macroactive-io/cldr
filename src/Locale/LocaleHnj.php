<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageHnj;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Hmong Njua
 *
 * @psalm-immutable
 */
class LocaleHnj extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return '𞄀𞄄𞄰𞄩𞄍𞄜𞄰';
    }

    public function language(): LanguageInterface
    {
        return new LanguageHnj();
    }
}
