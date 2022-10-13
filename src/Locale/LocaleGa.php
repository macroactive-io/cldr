<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageGa;

/**
 * Class LocaleGa - Irish
 */
class LocaleGa extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Gaeilge';
    }

    public function endonymSortable()
    {
        return 'GAEILGE';
    }

    public function language()
    {
        return new LanguageGa();
    }
}
