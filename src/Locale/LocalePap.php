<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguagePap;

/**
 * Papiamentu
 *
 * @psalm-immutable
 */
class LocalePap extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Papiamentu';
    }

    public function endonymSortable(): string
    {
        return 'PAPIAMENTU';
    }

    public function language(): LanguageInterface
    {
        return new LanguagePap();
    }
}
