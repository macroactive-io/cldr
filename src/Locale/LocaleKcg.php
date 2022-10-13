<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKcg;

/**
 * Class LocaleKcg - Tyap
 */
class LocaleKcg extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Tyap';
    }

    public function endonymSortable()
    {
        return 'TYAP';
    }

    public function language()
    {
        return new LanguageKcg();
    }
}
