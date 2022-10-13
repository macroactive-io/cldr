<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageTl;

/**
 * Class LocaleTl - Tagalog
 */
class LocaleTl extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Tagalog';
    }

    public function endonymSortable()
    {
        return 'TAGALOG';
    }

    public function language()
    {
        return new LanguageTl();
    }
}
