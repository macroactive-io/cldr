<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageGuw;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * @psalm-immutable
 */
class LocaleGuw extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Gun';
    }

    public function endonymSortable(): string
    {
        return 'GUN';
    }

    public function language(): LanguageInterface
    {
        return new LanguageGuw();
    }
}
