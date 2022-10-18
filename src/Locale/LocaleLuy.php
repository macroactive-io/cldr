<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageLuy;

/**
 * Luyia
 *
 * @psalm-immutable
 */
class LocaleLuy extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Luluhia';
    }

    public function endonymSortable(): string
    {
        return 'LULUHIA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageLuy();
    }
}
