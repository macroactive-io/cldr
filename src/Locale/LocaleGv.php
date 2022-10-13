<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageGv;

/**
 * Class LocaleGv - Manx
 */
class LocaleGv extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Gaelg';
    }

    public function endonymSortable()
    {
        return 'GAELG';
    }

    public function language()
    {
        return new LanguageGv();
    }
}
