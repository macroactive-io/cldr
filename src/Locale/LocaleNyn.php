<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageNyn;

/**
 * Class LocaleNyn - Nyankole
 */
class LocaleNyn extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Runyankore';
    }

    public function endonymSortable()
    {
        return 'RUNYANKORE';
    }

    public function language()
    {
        return new LanguageNyn();
    }
}
