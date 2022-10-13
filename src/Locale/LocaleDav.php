<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageDav;

/**
 * Class LocaleDav - Taita
 */
class LocaleDav extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Kitaita';
    }

    public function endonymSortable()
    {
        return 'KITAITA';
    }

    public function language()
    {
        return new LanguageDav();
    }
}
