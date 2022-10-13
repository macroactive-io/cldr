<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageTo;

/**
 * Class LocaleTo - Tongan
 */
class LocaleTo extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'lea fakatonga';
    }

    public function endonymSortable()
    {
        return 'LEA FAKATONGA';
    }

    public function language()
    {
        return new LanguageTo();
    }
}
