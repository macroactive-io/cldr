<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageEbu;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Embu
 *
 * @psalm-immutable
 */
class LocaleEbu extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Kĩembu';
    }

    public function endonymSortable(): string
    {
        return 'KIEMBU';
    }

    public function language(): LanguageInterface
    {
        return new LanguageEbu();
    }
}
