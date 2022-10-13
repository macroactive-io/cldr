<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageGuw;

/**
 * Class LocaleFrBj
 */
class LocaleGuw extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Gun';
    }

    public function endonymSortable()
    {
        return 'GUN';
    }

    public function language()
    {
        return new LanguageGuw();
    }
}
