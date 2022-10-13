<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageRof;

/**
 * Class LocaleRof - Rombo
 */
class LocaleRof extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Kihorombo';
    }

    public function endonymSortable()
    {
        return 'KIHOROMBO';
    }

    public function language()
    {
        return new LanguageRof();
    }
}
