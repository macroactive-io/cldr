<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageMs;

/**
 * Class LocaleMs - Malay
 */
class LocaleMs extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Melayu';
    }

    public function endonymSortable()
    {
        return 'MELAYU';
    }

    public function language()
    {
        return new LanguageMs();
    }
}
