<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageNds;

/**
 * Low German
 *
 * @psalm-immutable
 */
class LocaleNds extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Neddersass’sch';
    }

    public function endonymSortable(): string
    {
        return 'NEDDERSASS’SCH';
    }

    public function language(): LanguageInterface
    {
        return new LanguageNds();
    }
}
