<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageCy;

/**
 * Class LocaleCy - Welsh
 */
class LocaleCy extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Cymraeg';
    }

    public function endonymSortable()
    {
        return 'CYMRAEG';
    }

    public function language()
    {
        return new LanguageCy();
    }
}
