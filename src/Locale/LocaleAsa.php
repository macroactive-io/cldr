<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageAsa;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Asu
 *
 * @psalm-immutable
 */
class LocaleAsa extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Kipare';
    }

    public function endonymSortable(): string
    {
        return 'KIPARE';
    }

    public function language(): LanguageInterface
    {
        return new LanguageAsa();
    }
}
