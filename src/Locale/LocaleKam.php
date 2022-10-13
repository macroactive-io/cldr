<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKam;

/**
 * Class LocaleKam - Kamba
 */
class LocaleKam extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Kikamba';
    }

    public function endonymSortable()
    {
        return 'KIKAMBA';
    }

    public function language()
    {
        return new LanguageKam();
    }
}
