<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageLg;

/**
 * Class LocaleLg - Ganda
 */
class LocaleLg extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Luganda';
    }

    public function endonymSortable()
    {
        return 'LUGANDA';
    }

    public function language()
    {
        return new LanguageLg();
    }
}
