<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageLg;

/**
 * Ganda
 *
 * @psalm-immutable
 */
class LocaleLg extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Luganda';
    }

    public function endonymSortable(): string
    {
        return 'LUGANDA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageLg();
    }
}
