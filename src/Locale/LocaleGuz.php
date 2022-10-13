<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageGuz;

/**
 * Class LocaleGuz - Gusii
 */
class LocaleGuz extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Ekegusii';
    }

    public function endonymSortable()
    {
        return 'EKEGUSII';
    }

    public function language()
    {
        return new LanguageGuz();
    }
}
