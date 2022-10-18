<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageTl;

/**
 * Tagalog
 *
 * @psalm-immutable
 */
class LocaleTl extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Tagalog';
    }

    public function endonymSortable(): string
    {
        return 'TAGALOG';
    }

    public function language(): LanguageInterface
    {
        return new LanguageTl();
    }
}
