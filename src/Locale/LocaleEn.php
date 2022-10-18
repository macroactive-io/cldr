<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageEn;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * English
 *
 * @psalm-immutable
 */
class LocaleEn extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'English';
    }

    public function endonymSortable(): string
    {
        return 'ENGLISH';
    }

    public function language(): LanguageInterface
    {
        return new LanguageEn();
    }
}
