<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageRwk;

/**
 * Class LocaleRwk - Rwa
 */
class LocaleRwk extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Kiruwa';
    }

    public function endonymSortable()
    {
        return 'KIRUWA';
    }

    public function language()
    {
        return new LanguageRwk();
    }
}
