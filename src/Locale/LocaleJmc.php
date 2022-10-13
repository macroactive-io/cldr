<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageJmc;

/**
 * Class LocaleJmc - Machame
 */
class LocaleJmc extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Kimachame';
    }

    public function endonymSortable()
    {
        return 'KIMACHAME';
    }

    public function language()
    {
        return new LanguageJmc();
    }
}
