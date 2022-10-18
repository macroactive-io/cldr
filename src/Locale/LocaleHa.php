<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageHa;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Class LocaleHa - Hausa
 * @psalm-immutable
 */
class LocaleHa extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Hausa';
    }

    public function endonymSortable(): string
    {
        return 'HAUSA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageHa();
    }
}
