<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageNy;

/**
 * Class LocaleNy - Chewa
 */
class LocaleNy extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Chichewa';
    }

    public function endonymSortable()
    {
        return 'CHICHEWA';
    }

    public function language()
    {
        return new LanguageNy();
    }
}
