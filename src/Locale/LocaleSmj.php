<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSmj;

/**
 * Class LocaleSmj
 */
class LocaleSmj extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'julevsámegiella';
    }

    public function endonymSortable()
    {
        return 'JULEVSAMEGIELLA';
    }

    public function language()
    {
        return new LanguageSmj();
    }
}
