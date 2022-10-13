<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSo;

/**
 * Class LocaleSo - Somali
 */
class LocaleSo extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Soomaali';
    }

    public function endonymSortable()
    {
        return 'SOOMAALI';
    }

    public function language()
    {
        return new LanguageSo();
    }
}
