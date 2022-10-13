<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageNds;

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
