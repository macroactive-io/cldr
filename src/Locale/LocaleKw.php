<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKw;

/**
 * Class LocaleKw - Cornish
 */
class LocaleKw extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'kernewek';
    }

    public function endonymSortable()
    {
        return 'KERNEWEK';
    }

    public function language()
    {
        return new LanguageKw();
    }
}
