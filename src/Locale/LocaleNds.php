<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageNds;

/**
 * Class LocaleNds - Low German
 * @psalm-immutable
 */
class LocaleNds extends LocaleDe
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
