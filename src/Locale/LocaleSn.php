<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSn;

/**
 * Class LocaleSn - Shona
 */
class LocaleSn extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'chiShona';
    }

    public function endonymSortable()
    {
        return 'CHISHONA';
    }

    public function language()
    {
        return new LanguageSn();
    }
}
