<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKde;

/**
 * Class LocaleKde - Makonde
 */
class LocaleKde extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Chimakonde';
    }

    public function endonymSortable()
    {
        return 'CHIMAKONDE';
    }

    public function language()
    {
        return new LanguageKde();
    }
}
