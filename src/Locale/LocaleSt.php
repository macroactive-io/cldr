<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSt;

/**
 * Class LocaleSt
 */
class LocaleSt extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Sesotho';
    }

    public function endonymSortable()
    {
        return 'SESOTHO';
    }

    public function language()
    {
        return new LanguageSt();
    }
}
