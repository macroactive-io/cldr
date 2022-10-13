<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageNus;

/**
 * Class LocaleNus - Nuer
 */
class LocaleNus extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Thok Nath';
    }

    public function endonymSortable()
    {
        return 'THOK NATH';
    }

    public function language()
    {
        return new LanguageNus();
    }
}
